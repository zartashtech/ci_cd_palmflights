<?php
/**
 * WhatsApp Message Sender (Whatsmark API)
 * ---------------------------------------
 * - Debug Mode: prints payload, URL, API response and stops (no redirect).
 * - Production Mode: sends normally, on error can trigger admin email.
 */

require_once __DIR__ . "/config.php";
require_once __DIR__ . "/message_builder.php";
require_once __DIR__ . "/helpers.php";
require_once __DIR__ . "/variables.php";

// Load config
$config = include __DIR__ . "/config.php";

// 🔹 Debug email support (plug & play)
// Controlled via config.php → "enableDebugEmail" => true/false
if (!empty($config['enableDebugEmail']) && $config['enableDebugEmail'] === true) {
    require_once __DIR__ . "/debug_email.php";  
}

function sendWhatsAppTemplateMessage($to)
{
    global $config;

    $variables = include __DIR__ . "/variables.php";
    $formName  = $variables['wa_form_name'] ?? "default_message";

    $builder = new MessageBuilder($config, $variables);
    $payload = $builder->buildTemplatePayload($formName, $to);

    // 🚫 Skip if disabled
    if ($payload === null) {
        return ["skipped" => true, "reason" => "Form disabled", "form_name" => $formName];
    }

    // ✅ Correct Whatsmark endpoint
    $url = rtrim($config['base_url'], "/") . "/" . $config['tenant'] . "/messages/template";

    $headers = [
        "Authorization: Bearer " . $config['token'],
        "Content-Type: application/json"
    ];

    // ===========================================================
    // 🔹 DEBUG MODE
    // ===========================================================
    if (!empty($config['debug']) && $config['debug'] === true) {
        $apiResponse = http_post_json($url, $payload, $headers);

        echo "<pre>";
        echo "🔹 WA form_name used internally: {$formName}\n";
        echo "🔹 Endpoint URL: {$url}\n\n";

        echo "API Payload (PHP Array Preview)\n";
        print_r($payload);

        echo "\nAPI Payload (Raw JSON Body)\n";
        echo json_encode($payload, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

        echo "\n\nAPI Response (Raw)\n";
        print_r($apiResponse);

        if (!empty($apiResponse['body'])) {
            echo "\n\nAPI Response (Decoded JSON)\n";
            $decoded = json_decode($apiResponse['body'], true);
            print_r($decoded);

            if (isset($decoded['status'])) {
                echo "\n\n--- Delivery Status ---\n";
                echo "Status: " . $decoded['status'] . "\n";
                echo "Message: " . ($decoded['message'] ?? 'N/A') . "\n";
            }
        }

        echo "\n--- WhatsApp Debug Mode ---\n";
        echo "</pre>";

        exit; // ⛔ Stop here, no redirect
    }

    // ===========================================================
    // 🔹 PRODUCTION MODE
    // ===========================================================
    $apiResponse = http_post_json($url, $payload, $headers);

    // If API fails → trigger debug email (only if enabled)
    if (!empty($config['enableDebugEmail']) && $config['enableDebugEmail'] === true) {
        if ($apiResponse['status'] !== 200 || stripos($apiResponse['body'], 'success') === false) {
            if (function_exists('sendDebugEmail')) {
                sendDebugEmail($payload, $apiResponse, $formName);
            }
        }
    }

    return $apiResponse;
}
