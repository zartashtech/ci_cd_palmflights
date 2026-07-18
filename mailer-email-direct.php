<?php

require('loading/phpmailer/class.phpmailer.php');
require('loading/phpmailer/class.smtp.php');

// include('connection-db.php');

function test_input($dataValidate)
{
    $dataValidate = trim($dataValidate);
    $dataValidate = stripslashes($dataValidate);
    $dataValidate = htmlspecialchars($dataValidate);
    $dataValidate = strip_tags($dataValidate);
    return $dataValidate;
}

$fname = test_input($_POST['firstname']);
$lname = test_input($_POST['lastname']);
$email = test_input($_POST['email']);
$contact_no = test_input($_POST['phoneNumber']);
//$message= test_input($_POST['message']);
$airline_name = test_input($_GET['airline_name']);
$origin = test_input($_GET['origin']);
$destination = test_input($_GET['destination']);
$departure_date = test_input($_GET['departing_date']);
$trip_type = test_input($_GET['trip_type']);
$class_name = test_input($_GET['class_name']);
$adults = test_input($_GET['adults']);
$child = test_input($_GET['child']);
$infant = test_input($_GET['infants']);
$total_fare = test_input($_GET['totalFare']);

$extra_detail = test_input($_POST['extra_detail']);

$destination_city = test_input($_GET['destination_city']);




    $emailAddress = 'sales@palmflights.co.uk';
    $fromName = "Palm Flights LTD";
    $smtp = true;

    $subject = 'Ask Price for ' .'  ' . $destination_city ;

    // $headers = "From:sales@palmflights.co.uk\r\n";
    // $headers .= "Reply-To: sales@palmflights.co.uk\r\n";

    // $headers .= "MIME-Version: 1.0\r\n";
    // $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $message = '<html><body>';
    $message .= '<h2 style="color: #006dad;">Palm <span style="color: #1193ce;"> Flights LTD</span> Booking Details</h2><br />';
    $message .= '<table rules="all" style="border-color: #666;" align:"center" cellpadding="12">';
    $message .= "<tr style='background: ;'><td><strong>Name:</strong> </td><td>" . $fname . " " . $lname . "</td></tr>";
    $message .= "<tr><td><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
    $message .= "<tr><td><strong>Contact Number:</strong> </td><td>" . $contact_no . "</td></tr>";
    $message .= "<tr><td><strong>Leaving From:</strong> </td><td>" . $origin . "</td></tr>";
    $message .= "<tr><td><strong>Going to:</strong> </td><td>" . $destination . "</td></tr>";
    $message .= "<tr><td><strong>Airline:</strong> </td><td>" . $airline_name . "</td></tr>";

    $message .= "<tr><td><strong>Total Fare:</strong> </td><td><strong>£ " . $total_fare . "</strong></td></tr>";
    $message .= "</table>";

    $message .= "</body></html>";

    // mail($to, $subject, $message, $headers, '-f sales@palmflights.co.uk');

    // header("location:success.php?firstname=$fname&origin=$origin&destination=$destination&departing_date=$departure_date&leaving_date=$return_date&airline_name=$airline_name&total_fare=$total_fare");


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

    if ($mail->Send()) {
        header("location:success-direct.php?firstname=$fname&origin=$origin&destination=$destination&airline_name=$airline_name&total_fare=$total_fare");
    } else {
        echo "<center><h3 style='color: #ff0000;'> Error, Please fill all required fields.</h3></center>";
        echo "<center><h3><a href=\"javascript:history.go(-1)\">GO BACK</a></h3></center>";
    }

    /** validation checks ends here. **/


?>
<!-- // -->