<?php

require('loading/phpmailer/class.phpmailer.php');
require('loading/phpmailer/class.smtp.php');

// include('connection-db.php');


$fname = test_input($_POST['firstname']);
$lname = test_input($_POST['lastname']);
$email = test_input($_POST['customeremail']);
$contact_no = test_input($_POST['customerphone']);
//$message= test_input($_POST['message']);
$airline_name = test_input($_POST['airline_name']);
$origin = test_input($_POST['origin']);
$destination = test_input($_POST['destination']);
$return_date = test_input($_POST['start']);
$departure_date = test_input($_POST['end']);
$trip_type = test_input($_POST['trip_type']);
$class_name = test_input($_POST['class_name']);
$adults = test_input($_POST['adults']);
$child = test_input($_POST['child']);
$infant = test_input($_POST['infants']);
$total_fare = test_input($_POST['totalFare']);

$ip_country = test_input($_POST['ip_country']);
$ip = test_input($_POST['ip']);
$device = test_input($_POST['device']);
$query_form = test_input($_POST['query_form']);
$query_date = test_input($_POST['query_date']);
$extra_detail = test_input($_POST['extra_detail']);


    $emailAddress = 'sales@palmflights.co.uk	';
    $fromName = "Palm Flights LTD";
    $smtp = true;

    $subject = 'New Form Search at Palm Flights LTD';



    $message = '<html><body>';
    $message .= '<h2 style="color: #006dad;">Form Search at Palm Flights LTD</h2><br />';
    $message .= '<table rules="all" style="border-color: #666;" align:"center" cellpadding="12">';
    $message .= "<tr><td><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
    $message .= "<tr><td><strong>Contact Number:</strong> </td><td>" . $contact_no . "</td></tr>";
    $message .= "<tr><td><strong>Leaving From:</strong> </td><td>" . $origin . "</td></tr>";
    $message .= "<tr><td><strong>Going to:</strong> </td><td>" . $destination . "</td></tr>";
    $message .= "<tr><td><strong>Departing Date:</strong> </td><td>" . $departure_date . "</td></tr>";
    $message .= "<tr><td><strong>Return Date:</strong> </td><td>" . $return_date . "</td></tr>";
    $message .= "<tr><td><strong>Trip Type:</strong> </td><td>" . $trip_type . "</td></tr>";
    $message .= "<tr><td><strong>Airline:</strong> </td><td>" . $airline_name . "</td></tr>";
    $message .= "<tr><td><strong>Airline Class:</strong> </td><td>" . $class_name . "</td></tr>";
    $message .= "<tr><td><strong>Number of Adults:</strong> </td><td>" . $adults . "</td></tr>";
    $message .= "<tr><td><strong>Number of Childern:</strong> </td><td>" . $child . "</td></tr>";
    $message .= "<tr><td><strong>Number of Infants:</strong> </td><td>" . $infant . "</td></tr>";
    $message .= "</table>";



    $message .= "</body></html>";

   

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
    $to = $emailAddress;
    $mail->AddAddress($to, '');

    $mail->MsgHTML($message);

    $mail->Body = $message;

    if ($mail->Send()) ;



?>

<!-- // -->