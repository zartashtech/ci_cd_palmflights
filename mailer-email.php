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
$return_date = test_input($_GET['leaving_date']);
$departure_date = test_input($_GET['departing_date']);
$trip_type = test_input($_GET['trip_type']);
$class_name = test_input($_GET['class_name']);
$adults = test_input($_GET['adults']);
$child = test_input($_GET['child']);
$infant = test_input($_GET['infants']);
$total_fare = test_input($_GET['totalFare']);

$ip_country = test_input($_POST['ip_country']);
$ip = test_input($_POST['ip']);
$device = test_input($_POST['device']);
$query_form = test_input($_POST['query_form']);
$query_date = test_input($_POST['query_date']);
$extra_detail = test_input($_POST['extra_detail']);


function isNotEmpty($val)
{
    if ($val && !empty(str_replace(" ", "", $val))) {
        return true;
    }
    return false;
}

function checkUrlSlashes($valText){
    if (strstr($valText, '\\') !== FALSE || strpos($valText, '/') !== FALSE || stripos($valText, 'ww.') !== false || stripos($valText, 'www') !== false || stripos($valText, 'http://') !== false || stripos($valText, 'https://') !== false){
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

function validateDepartingReturningDate()
{
    $depDate = test_input($_GET['departing_date']);
    $retDate = test_input($_GET['leaving_date']);
    $strTimeDeparting = str_replace("-", "", date_format(date_create($depDate), "Y-m-d"));
    $strTimeReturning = str_replace("-", "", date_format(date_create($retDate), "Y-m-d"));
    $today = str_replace("-", "", date("Y-m-d"));

    if (validateDepartingDate($depDate) && isNotEmpty($retDate) && $strTimeReturning >= $today && $strTimeDeparting <= $strTimeReturning) {
        return true;
    } else if (isNotEmpty($depDate) && !isNotEmpty($retDate)) {
        return true;
    }
    return false;
}

function validateDepartingDate($val)
{
    $strTimeDeparting = str_replace("-", "", date_format(date_create($val), "Y-m-d"));
    $today = str_replace("-", "", date("Y-m-d"));

    if (isNotEmpty($val) && $strTimeDeparting >= $today) {
        return true;
    }
    return false;
}

function showDepartingReturningErr()
{
    $depDate = test_input($_GET['departing_date']);
    $retDate = test_input($_GET['leaving_date']);
    $strTimeDeparting = str_replace("-", "", date_format(date_create($depDate), "Y-m-d"));
    $strTimeReturning = str_replace("-", "", date_format(date_create($retDate), "Y-m-d"));
    $today = str_replace("-", "", date("Y-m-d"));

    if (validateDepartingDate($depDate) && isNotEmpty($retDate) && $strTimeReturning < $today) {
        showError('Previous Dates are not allowed.');
    } else if (validateDepartingDate($depDate) && isNotEmpty($retDate) && $strTimeDeparting > $strTimeReturning) {
        showError('Departing Date can not be after Returning Date.');
    } else {
        showError('Please select valid Departing Date.');
    }
}

function showError($err)
{
    header("location:success.php?error=$err");
}


if (checkName($fname) && checkPhone($contact_no) && isNotEmpty($email) && strLen($email) <= 50 && !preg_match("/[\r\n]/", $email) && isset($trip_type) && isset($class_name) && isset($adults) && isNotEmpty($origin) && strLen($origin) <= 100 && isNotEmpty($destination) && strLen($destination) <= 100 && validateDepartingDate($departure_date)) {

    // $to = 'sales@palmflights.co.uk';
    //$emailAddress = 'zartash.tayyab@gmail.com';
    $emailAddress = 'sales@palmflights.co.uk';
    $fromName = "Palm Flights LTD";
    $smtp = true;

    $subject = 'New Booking order at Palm Flights LTD';

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
    $message .= "<tr><td><strong>Departing Date:</strong> </td><td>" . $departure_date . "</td></tr>";
    $message .= "<tr><td><strong>Return Date:</strong> </td><td>" . $return_date . "</td></tr>";
    $message .= "<tr><td><strong>Trip Type:</strong> </td><td>" . $trip_type . "</td></tr>";
    $message .= "<tr><td><strong>Airline:</strong> </td><td>" . $airline_name . "</td></tr>";
    $message .= "<tr><td><strong>Airline Class:</strong> </td><td>" . $class_name . "</td></tr>";

    if (($extra_detail) != '' && (!isNotEmpty($extra_detail) || (isNotEmpty($extra_detail) && checkUrlSlashes($extra_detail)))) {
        $message .= "<tr><td><strong>Extra Detail:</strong> </td><td>" . $extra_detail . "</td></tr>";
    }

    $message .= "<tr><td><strong>Number of Adults:</strong> </td><td>" . $adults . "</td></tr>";
    $message .= "<tr><td><strong>Number of Childern:</strong> </td><td>" . $child . "</td></tr>";
    $message .= "<tr><td><strong>Number of Infants:</strong> </td><td>" . $infant . "</td></tr>";
    $message .= "<tr><td><strong>Total Fare:</strong> </td><td><strong>£ " . $total_fare . "</strong></td></tr>";
    $message .= "</table>";
    $message .= '<h2>Other Passengers Details</h2><br />';
    $message .= '<table rules="all" style="border-color: #666;" align:"center" cellpadding="12">';
    $message .= "<tr style='background: #eee;'><th><strong>No.</strong> </th><th><strong>Passenger Name</strong> </th><th><strong>Passenger Age</strong> </th></tr>";

    if (test_input($_POST['fname1']) != '') {
        $message .= "<tr><td><strong>1. </strong></td>";
        $message .= "<td>" . test_input($_POST['fname1']) .  "</td>";
        $message .= "<td>" . test_input($_POST['age1']) . "</td></tr>";
    }

    if (test_input($_POST['fname2']) != '') {
        $message .= "<tr><td><strong>2. </strong></td>";
        $message .= "<td>" . test_input($_POST['fname2']) .  "</td>";
        $message .= "<td>" . test_input($_POST['age2']) . "</td></tr>";
    }

    if (test_input($_POST['fname3']) != '') {
        $message .= "<tr><td><strong>3. </strong></td>";
        $message .= "<td>" . test_input($_POST['fname3']) . "</td>";
        $message .= "<td>" . test_input($_POST['age3']) . "</td></tr>";
    }

    if (test_input($_POST['fname4']) != '') {
        $message .= "<tr><td><strong>4. </strong></td>";
        $message .= "<td>" . test_input($_POST['fname4']) . "</td>";
        $message .= "<td>" . test_input($_POST['age4']) . "</td></tr>";
    }

    if (test_input($_POST['fname5']) != '') {
        $message .= "<tr><td><strong>5. </strong></td>";
        $message .= "<td>" . test_input($_POST['fname5']) .  "</td>";
        $message .= "<td>" . test_input($_POST['age5']) . "</td></tr>";
    }

    if (test_input($_POST['fname6']) != '') {
        $message .= "<tr><td><strong>6. </strong></td>";
        $message .= "<td>" . test_input($_POST['fname6']) . "</td>";
        $message .= "<td>" . test_input($_POST['age6']) . "</td></tr>";
    }

    if (test_input($_POST['fname7']) != '') {
        $message .= "<tr><td><strong>7. </strong></td>";
        $message .= "<td>" . test_input($_POST['fname7']) .  "</td>";
        $message .= "<td>" . test_input($_POST['age7']) . "</td></tr>";
    }

    if (test_input($_POST['fname8']) != '') {
        $message .= "<tr><td><strong>8. </strong></td>";
        $message .= "<td>" . test_input($_POST['fname8']) .  "</td>";
        $message .= "<td>" . test_input($_POST['age8']) . "</td></tr>";
    }

    if (test_input($_POST['fname9']) != '') {
        $message .= "<tr><td><strong>9. </strong></td>";
        $message .= "<td>" . test_input($_POST['fname9']) . "</td>";
        $message .= "<td>" . test_input($_POST['age9']) . "</td></tr>";
    }

    if (test_input($_POST['fname10']) != '') {
        $message .= "<tr><td><strong>10. </strong></td>";
        $message .= "<td>" . test_input($_POST['fname10']) .  "</td>";
        $message .= "<td>" . test_input($_POST['age10']) . "</td></tr>";
    }

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
        header("location:success.php?firstname=$fname&origin=$origin&destination=$destination&departing_date=$departure_date&leaving_date=$return_date&airline_name=$airline_name&total_fare=$total_fare");
    } else {
        echo "<center><h3 style='color: #ff0000;'> Error, Please fill all required fields.</h3></center>";
        echo "<center><h3><a href=\"javascript:history.go(-1)\">GO BACK</a></h3></center>";
    }

    /** validation checks ends here. **/
} else if (!checkName($fname)) {
    showError('Your Name is not Valid.');
} else if (!checkPhone($contact_no)) {
    showError('Phone Number is not Valid.');
} else if (!isNotEmpty($email) || strLen($email) > 50 || preg_match("/[\r\n]/", $email)) {
    showError('Your Email is not Valid.');
} else if (!isNotEmpty($trip_type)) {
    showError('Your Trip type is not Valid.');
} else if (!isNotEmpty($class_name)) {
    showError('Your Class Name is not Valid.');
} else if (!isNotEmpty($adults)) {
    showError('Your have to select at least one adult.');
} else if (!validateDepartingDate($departure_date)) {
    showError('Your Departing Date is not Valid.');
} else if (!validateDepartingReturningDate()) {
    showDepartingReturningErr();
} else if (!isNotEmpty($origin) || strLen($origin) > 100) {
    showError('Your Starting/Flying From place is not Valid.');
} else if (!isNotEmpty($destination) || strLen($destination) > 100) {
    showError('Your Destination/Going to place is not Valid.');
} else {
    showError('Please fill all required fields with valid value.');
}


?>

<!-- // -->