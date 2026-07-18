<?php

include('loading/phpmailer/class.phpmailer.php');
include('loading/phpmailer/class.smtp.php');

function test_input($dataValidate)
{
    $dataValidate = trim($dataValidate);
    $dataValidate = stripslashes($dataValidate);
    $dataValidate = htmlspecialchars($dataValidate);
    $dataValidate = strip_tags($dataValidate);
    return $dataValidate;
}

$name = test_input($_POST['name']);
$email = test_input($_POST['mail']);
$cell = test_input($_POST['cell']);
$contact_message = test_input($_POST['msg']);


function isNotEmpty($val)
{
    if ($val && !empty(str_replace(" ", "", $val))) {
        return true;
    }
    return false;
}

function checkUrlSlashes($valText)
{
    if (strstr($valText, '\\') !== FALSE || strpos($valText, '/') !== FALSE || stripos($valText, 'ww.') !== false || stripos($valText, 'www') !== false || stripos($valText, 'http://') !== false || stripos($valText, 'https://') !== false) {
        return false;
    }
    return true;
}

function checkName($nameValue)
{
    if (isNotEmpty($nameValue) && strLen($nameValue) >= 3 && strLen($nameValue) <= 30 && checkUrlSlashes($nameValue)) {
        return true;
    }
    return false;
}

function checkPhone($phoneValue)
{
    if (isNotEmpty($phoneValue) && is_numeric($phoneValue) && !empty(str_replace("0", "", $phoneValue)) && strLen($phoneValue) > 6 && strLen($phoneValue) <= 25 && checkUrlSlashes($phoneValue)) {
        return true;
    }
    return false;
}

function showError($err)
{
    header("location:form_contact-us.php?error=$err");
}

if (checkName($name) && checkPhone($cell) && isNotEmpty($email) && strLen($email) <= 50 && preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email) && !preg_match("/[\r\n]/", $email) && isNotEmpty($contact_message) && checkUrlSlashes($contact_message) && strLen($contact_message) <= 400) {

    // $to = 'sales@palmflights.co.uk';
    // $toEmail = 'zartash.tayyab@gmail.com';
    $toEmail = 'sales@palmflights.co.uk';
    $emailAddress = 'sales@palmflights.co.uk';
    $fromName = "Palm Flights LTD";
    $smtp = true;

    $subject = 'Message at Contact Us Form';

    // $headers = "From:info@palmflights.co.uk\r\n";
    // $headers .= "Reply-To: info@palmflights.co.uk\r\n";

    // $headers .= "MIME-Version: 1.0\r\n";
    // $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


    $message = '<html><body>';
    $message .= '<h2 style="color: #006dad;">Palm <span style="color: #1193ce;"> Flights LTD</span> Contact Form</h2><br />';
    $message .= '<table rules="all" style="border-color: #666;" align:"center" cellpadding="12">';
    $message .= "<tr style='background: #eee;'><td><strong>Name: </strong> </td><td>" . $name . "</td></tr>";
    $message .= "<tr><td><strong>Email: </strong> </td><td>" . $email . "</td></tr>";
    $message .= "<tr><td><strong>Phone: </strong> </td><td>" . $cell . "</td></tr>";

    $message .= "<tr><td><strong>Message: </strong> </td><td>" . $contact_message . "</td></tr>";

    $message .= "</table>";
    $message .= "</body></html>";

    // mail($to, $subject, $message, $headers, '-finfo@palmflights.co.uk');

    // header("Location: form_contact-us.php?msg=0k");


    $mail = new PHPMailer(); // create a object to that class.

    if ($smtp) {

        $mail->IsSMTP();
        $mail->Host = "mail.palmflights.co.uk";
        $mail->SMTPSecure = "ssl";
        $mail->Port       = 465;

        // optional
        // used only when SMTP requires authentication  

        $mail->SMTPAuth = true;
        $mail->Username = 'sales@palmflights.co.uk';
        $mail->Password = '*eYvFotc6fR4@D+com92';
    }

    $mail->Timeout  = 360;

    $mail->Subject = $subject;
    $from = $fromName;
    $mail->From = 'sales@palmflights.co.uk';
    $mail->FromName = 'sales@palmflights.co.uk';
    $mail->AddReplyTo($emailAddress, $from);
    $to = $toEmail;
    $mail->AddAddress($to, '');

    $mail->MsgHTML($message);

    $mail->Body = $message;

    if ($mail->Send()) {
        header("location:form_contact-us.php?msg=0k");
    } else {

        header("location:form_contact-us.php?error=Some error in form!");
    }

    /** validation checks ends here. **/
} else if (!isNotEmpty($name) || !isNotEmpty($cell) || !isNotEmpty($email) || !isNotEmpty($contact_message)) {
    showError('Please fill all required fields.');
} else if (!checkName($name)) {
    showError('Your Name is not Valid.');
} else if (!checkPhone($cell)) {
    showError('Your Phone number is not Valid.');
} else if (!isNotEmpty($email) || strLen($email) > 50 || preg_match("/[\r\n]/", $email)) {
    showError('Your Email is not Valid.');
} else if (!isNotEmpty($contact_message) || checkUrlSlashes($contact_message) || strLen($contact_message) > 400) {
    /* If message length is greater than 400 then limit will reached */
    showError('Please write your message.');
} else {
    showError('Please fill all required fields with valid value.');
}


?>

<!-- // -->