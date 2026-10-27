<?php
require_once __DIR__ . '/security-helper.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Anti-bot checks
    if (pf_is_bot_honeypot() || pf_is_bot_timing()) {
        exit('Request processed.');
    }

    $p_name        = pf_clean_input($_POST['name'] ?? '');
    $email         = pf_clean_input($_POST['mail'] ?? '');
    $phone         = pf_clean_input($_POST['cell'] ?? '');
    $extra_details = pf_clean_input($_POST['msg'] ?? '');
    $source_id     = 2;
    $siteurl       = "Inquiry Via Contact Us";
    $form_name     = pf_clean_input($_POST['form_name'] ?? 'contact-us');

    // Strict validation
    $nameError = pf_validate_name($p_name);
    $emailError = pf_validate_email($email);
    $phoneError = pf_validate_phone($phone);
    $messageError = empty($extra_details) ? 'Please enter your message.' : null;

    if (empty($nameError) && empty($emailError) && empty($phoneError) && empty($messageError)) {
        include '../tms92/tms92-db-connector.php';
        exit();
    } else {
        $firstErr = $nameError ?? $emailError ?? $phoneError ?? $messageError ?? 'Please verify your information.';
        echo "<script>alert(" . json_encode($firstErr) . "); window.history.back();</script>";
        exit();
    }
}
?>
