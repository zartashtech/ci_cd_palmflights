<?php
$emailto ="webforms@palmflights.co.uk";
$nameto = "Palm Flights";
$mailsubject = "Inquiry Via Contact Us ";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'classes/Exception.php';
require 'classes/PHPMailer.php';
require 'classes/SMTP.php';


$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.palmflights.co.uk';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'sales@palmflights.co.uk';                     //SMTP username
    $mail->Password   = '*eYvFotc6fR4@D+com92';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;
    
    $mail->Timeout       = 360;
    
    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('sales@palmflights.co.uk', 'Inquiry Confirmation');
    $mail->addAddress($emailto, $nameto);     //Add a recipient
    $mail->addReplyTo('sales@palmflights.co.uk', 'palmflights.co.uk');

    
    $message="<!DOCTYPE html> <html><body>";
    $message .= "<h2 style='color: #006dad;'>Palm <span style='color: #1193ce;'> Flights LTD</span> Quotation Booking Details</h2><br />";
    $message .= "<table rules='all' style='border-color: #666;' align:'center' cellpadding='12'>";
    
    $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td id='field_name'>" . $fname . "</td></tr>";
    $message .= "<tr><td><strong>Email:</strong> </td><td id='field_email'>" . $email . "</td></tr>";
    $message .= "<tr><td><strong>Contact Number:</strong> </td><td id='field_phonenumber'>" . $contact_no . "</td></tr>";
    
    $message .= "<tr><td><strong>Message:</strong> </td><td id='custom_field_10'>" . $details . "</td></tr>";
    
    $message .= "<tr><td><strong>Website:</strong> </td><td id='field_company'>" . $nameto . "</td></tr>";
    $message .= "<tr><td><strong>Website:</strong> </td><td id='custom_field_14'>" . $mailsubject . "</td></tr>";
   

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $mailsubject ;
    $mail->Body    = "$message";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    header("location:../../success.php?lastname=$fname");
   
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

	?>