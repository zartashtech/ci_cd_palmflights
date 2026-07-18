<?php
/**
 * Example entry point for sending WhatsApp messages
 */

require_once __DIR__ . "/wa_message.php";
require_once __DIR__ . "/pre_validation_number.php";

$config = include __DIR__ . "/config.php";

$rawPhone  = $_POST['phone'] ?? "";
$recipient = validate_phone_number($rawPhone);

if ($recipient) {
    $response = sendWhatsAppTemplateMessage($recipient);

    // Debug output is already handled inside wa_message.php
    if (!empty($config['debug']) && $config['debug'] === true) {
        exit; // No redirect
    }

    // Production redirect
    header("Location: /thank-you.php");
    exit;
} else {
    if (!empty($config['debug']) && $config['debug'] === true) {
        echo "<pre>Invalid phone number</pre>";
        exit;
    } else {
        header("Location: /error.php");
        exit;
    }
}
