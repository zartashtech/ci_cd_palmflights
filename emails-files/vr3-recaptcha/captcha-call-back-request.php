<?php
define("RECAPTCHA_V3_SECRET_KEY", '6Le70_0lAAAAAG2C2ihOBTmWwXe9R-9bQjK_yBMX');
 
if (isset($_POST['email']) && $_POST['email']) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
} else {
    // set error message and redirect back to form... 
    header('location: ../../form_new-get-a-quote.php');
    exit;
}
 
$token = $_POST['token'];
$action = $_POST['action'];
 
// call curl to POST request 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_V3_SECRET_KEY, 'response' => $token)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$arrResponse = json_decode($response, true);
 
// verify the response 
if($arrResponse["success"] == '1' && $arrResponse["action"] == $action && $arrResponse["score"] >= 0.5) {
     include '../vr2-validations/validation-call-back-request.php';
    // valid submission 
    // go ahead and do necessary stuff 
} else {
     echo "not ok";
    // spam submission 
    // show error message 
}
?>