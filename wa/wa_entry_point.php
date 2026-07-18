<?php
/**
 * wa_entry_point.php
 * ------------------
 * Single entry for WhatsApp logic:
 *  - Detect country + dial code (via IP)
 *  - Pre-checks (sanitize + validate phone)
 *  - Trigger WA only if valid
 *  - Notify admin via email if invalid
 *  - Handle debug
 */

require_once __DIR__ . "/pre_checks/ip2country.php";
require_once __DIR__ . "/pre_checks/sanitize_phone.php";
require_once __DIR__ . "/pre_checks/validate_phone.php";

$config = include __DIR__ . "/config.php";

// 🔹 Detect country/dial code from IP
$geo = detect_country_from_ip();
$fallbackDialCode = $geo['dial_code'] ?? "44"; // default UK

// 🔹 Validate phone
$normalizedPhone = validate_phone($phone, $fallbackDialCode);

if ($normalizedPhone !== false) {
    // ✅ Valid → send WA
    require_once __DIR__ . "/wa_message.php";
    $waResponse = sendWhatsAppTemplateMessage($normalizedPhone);

    if (!empty($waResponse['debug']) && $waResponse['debug'] === true) {
        echo "<pre>";
        echo "🔹 Raw form_name from validation.php: {$form_name}\n\n";
        echo "API Payload (Preview)\n";
        print_r($waResponse['payload']);
        echo "\nRaw JSON Body\n" . $waResponse['json'];
        echo "\n\nAPI Response\n";
        print_r($waResponse['apiResponse']);
        echo "\n--- WhatsApp Debug Mode ---\n";
        echo "Form Name: {$waResponse['form_name']}\n";
        echo "Detected Country: {$geo['country']} ({$geo['iso_code']})\n";
        echo "Fallback Dial Code: {$fallbackDialCode}\n";
        echo "</pre>";
        exit;
    }

} else {
    // ❌ Invalid → notify admin
    if (!empty($config['enableDebugEmail']) && $config['enableDebugEmail'] === true) {
        require_once __DIR__ . "/debug_email.php";

        $fakePayload = [
            "phone_number" => $phone,
            "reason"       => "Phone number failed validation",
            "form_name"    => $form_name ?? "N/A",
            "country"      => $geo['country'] ?? "Unknown",
            "dial_code"    => $fallbackDialCode
        ];

        $fakeApiResult = [
            "status" => 0,
            "body"   => "Skipped WhatsApp send because phone number is invalid",
            "error"  => "Phone validation failed"
        ];

        if (function_exists('sendDebugEmail')) {
            sendDebugEmail($fakePayload, $fakeApiResult, "[WhatsApp SKIPPED] " . ($form_name ?? "N/A"));
        }
    }
}
