<?php
/**
 * debug_email.php
 * ----------------
 * Sends an admin email if WhatsApp API request fails
 * OR if WhatsApp was skipped due to pre-checks (invalid phone etc).
 * Controlled via config.php -> enableDebugEmail.
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer classes from your existing mailer directory
require_once $_SERVER['DOCUMENT_ROOT'] . "/emails-files/vr2-mailer/classes/Exception.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/emails-files/vr2-mailer/classes/PHPMailer.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/emails-files/vr2-mailer/classes/SMTP.php";

// Load country detection
require_once __DIR__ . "/pre_checks/ip2country.php";

/**
 * Send debug email with error details
 *
 * @param array  $payload   Payload we tried to send (or skipped)
 * @param array  $apiResult API response (status, body, error)
 * @param string $formName  Name of the form/template
 */
function sendDebugEmail($payload, $apiResult, $formName = 'N/A')
{
    try {
        $mail = new PHPMailer(true);

        // --- Force SMTP mode ---
        $mail->isSMTP();
        $mail->Host       = 'mail.palmflights.co.uk';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'debug@palmflights.co.uk';
        $mail->Password   = '929;,93,loRNOS92';   // ⚠ consider moving to env/config
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        $mail->Timeout    = 360;

        // --- Sender info ---
        $mail->setFrom('debug@palmflights.co.uk', 'WhatsApp Debug Notifier');

        // --- Admin recipients ---
        $adminEmails = [
            "host@zartash.com"
        ];
        foreach ($adminEmails as $email) {
            $mail->addAddress($email);
        }

        $mail->addReplyTo('sales@palmflights.co.uk', 'palmflights.co.uk');

        // --- Decide subject dynamically ---
        $status  = $apiResult['status'] ?? 0;
        $message = $apiResult['error']  ?? '';

        if ($status === 0 || stripos($message, 'Phone validation') !== false) {
            $subject = "[WhatsApp SKIPPED] Phone/Pre-check failed";
        } else {
            $subject = "[WhatsApp API ERROR] Template send failed";
        }

        // --- Country detection ---
        $geo = detect_country_from_ip();
        $ipAddress = $_SERVER['REMOTE_ADDR'] ?? 'N/A';

        $countryInfo  = "Detected Country: " . ($geo['country'] ?? 'Unknown') . "\n";
        $countryInfo .= "ISO Code: " . ($geo['iso_code'] ?? 'N/A') . "\n";
        $countryInfo .= "Fallback Dial Code: +" . ($geo['dial_code'] ?? 'N/A') . "\n";
        $countryInfo .= "Client IP: {$ipAddress}\n";

        // --- Build log content (plain text for safety) ---
        $logContent  = "WhatsApp Notification\n";
        $logContent .= "Date/Time: " . date("Y-m-d H:i:s") . "\n";
        $logContent .= "Form Name: {$formName}\n\n";

        $logContent .= "=== API Result ===\n";
        $logContent .= print_r($apiResult, true) . "\n\n";

        $logContent .= "=== Payload Sent ===\n";
        $logContent .= json_encode($payload, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . "\n\n";

        $logContent .= "=== Country Detection ===\n";
        $logContent .= $countryInfo . "\n";

        // --- Send ---
        $mail->isHTML(false);
        $mail->Subject = $subject;
        $mail->Body    = $logContent;

        $mail->send();
        error_log("✅ Debug email sent to admins");

    } catch (Exception $e) {
        error_log("⚠ Debug email could not be sent: {$mail->ErrorInfo}");
    }
}