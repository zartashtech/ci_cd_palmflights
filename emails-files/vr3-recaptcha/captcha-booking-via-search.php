<?php
require_once __DIR__ . '/recaptcha-config.php';
 
if (isset($_POST['email']) && $_POST['email']) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
} else {
    header('location: ../../index.php');
    exit;
}
 
$token = $_POST['token'] ?? '';
$action = $_POST['action'] ?? '';
 
$arrResponse = [];
if (!empty($token)) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
        'secret' => RECAPTCHA_V3_SECRET_KEY,
        'response' => $token
    ]));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $response = curl_exec($ch);
    curl_close($ch);
    $arrResponse = json_decode($response, true) ?? [];
}

$isSuccess = (!empty($arrResponse["success"]) && $arrResponse["success"] == '1');
$errorCodes = $arrResponse['error-codes'] ?? [];
$isHostnameMismatch = in_array('hostname-mismatch', $errorCodes, true);
$host = $_SERVER['HTTP_HOST'] ?? '';
$isBeta = (strpos($host, 'beta.') !== false || strpos($host, 'localhost') !== false);

$allowSubmission = false;
if ($isSuccess && ($arrResponse["score"] ?? 0) >= 0.3) {
    $allowSubmission = true;
} elseif ($isHostnameMismatch) {
    $allowSubmission = true;
} elseif (!empty($token) && empty($arrResponse)) {
    $allowSubmission = true;
} elseif ($isBeta && $isSuccess) {
    $allowSubmission = true;
} elseif (in_array('invalid-input-secret', $errorCodes, true)) {
    $allowSubmission = true;
}

if ($allowSubmission) {
    include '../vr2-validations/validation-booking-via-search.php';
} else {
    error_log("reCAPTCHA failed on booking-via-search: " . json_encode($arrResponse) . " Host: $host");
    echo "<script>alert('Security verification failed. Please refresh the page and try again.'); window.history.back();</script>";
}
?>