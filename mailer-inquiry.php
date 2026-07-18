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

$name = test_input($_POST['name']);
$cell = test_input($_POST['cell']);
$inq_email = test_input($_POST['inq_email']);
$inq_trip = test_input($_POST['inq_trip']);
$flying_from = test_input($_POST['flying_from']);
$flying_to = test_input($_POST['flying_to']);
$dep_date = test_input($_POST['dep_date']);
$ret_date = test_input($_POST['ret_date']);
$inq_message = test_input($_POST['inq_message']);
$ip_country = test_input($_POST['ip_country']);
$ip = test_input($_POST['ip']);
$device = test_input($_POST['device']);
$query_form = test_input($_POST['query_form']);
$query_date = test_input($_POST['query_date']);



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
    $depDate = test_input($_POST['dep_date']);
    $retDate = test_input($_POST['ret_date']);
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
    $depDate = test_input($_POST['dep_date']);
    $retDate = test_input($_POST['ret_date']);
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


if (checkName($name) && checkPhone($cell) && isNotEmpty($inq_email) && strLen($inq_email) <= 50 && !preg_match("/[\r\n]/", $inq_email) && isNotEmpty($flying_from) && strLen($flying_from) <= 100 && isNotEmpty($flying_to) && strLen($flying_to) <= 100 && validateDepartingDate($dep_date)) {

    // $to = 'sales@palmflights.co.uk';
    //$emailAddress = 'zartash.tayyab@gmail.com';
    $emailAddress = 'sales@palmflights.co.uk';
    $fromName = "Palm Flights LTD";
    $smtp = true;

    $subject = 'Query at Palm Flights LTD (Through Landing Page Book Now Button) ';

    // $headers = "From:Palm Flights LTD <sales@palmflights.co.uk>\r\n";
    // $headers .= "Reply-To: sales@palmflights.co.uk\r\n";

    // $headers .= "MIME-Version: 1.0\r\n";
    // $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


    $message = '<html><body>';
    $message .= '<h2 style="color: #006dad;">Palm <span style="color: #1193ce;"> Flights LTD</span> Inquiry</h2><br />';
    $message .= '<table rules="all" style="border-color: #666;" align:"center" cellpadding="12">';
    $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
    $message .= "<tr><td><strong>Contact No:</strong> </td><td>" . $cell . "</td></tr>";
    $message .= "<tr><td><strong>Email:</strong> </td><td>" . $inq_email . "</td></tr>";
    $message .= "<tr><td><strong>Type of Services:</strong> </td><td>" . $inq_trip . "</td></tr>";
    $message .= "<tr><td><strong>Flying From:</strong> </td><td>" . $flying_from . "</td></tr>";
    $message .= "<tr><td><strong>Flying to:</strong> </td><td>" . $flying_to . "</td></tr>";
    $message .= "<tr><td><strong>Departure Date:</strong> </td><td>" . $dep_date . "</td></tr>";
    $message .= "<tr><td><strong>Return Date:</strong> </td><td>" . $ret_date . "</td></tr>";
    $message .= "<tr><td><strong>Message Any Request:</strong> </td><td>" . $inq_message . "</td></tr>";

    if (test_input(isset($_POST['message'])) != '') {
        $message .= "<tr><td><strong>Extra Detail:</strong> </td><td>" . test_input($_POST['message']) . "</td></tr>";
    }


    $message .= "</table>";
    $message .= "</body></html>";


    // mail($to, $subject, $message, $headers, '-fsales@palmflights.co.uk');

    // header("location:success.php?firstname=$name&origin=$flying_from&destination=$flying_to&departing_date=$dep_date&leaving_date=$ret_date");

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
        header("location:success.php?firstname=$name&origin=$flying_from&destination=$flying_to&departing_date=$dep_date&leaving_date=$ret_date");
    } else {
        echo "<center><h3 style='color: #ff0000;'> Error, Please fill all required fields.</h3></center>";
        echo "<center><h3><a href=\"javascript:history.go(-1)\">GO BACK</a></h3></center>";
    }

    /** validation checks ends here. **/
} else if (!checkName($name)) {
    showError('Your Name is not Valid.');
} else if (!checkPhone($cell)) {
    showError('Phone Number is not Valid.');
} else if (!isNotEmpty($inq_email) || strLen($inq_email) > 50 || preg_match("/[\r\n]/", $inq_email)) {
    showError('Your Email is not Valid.');
} else if (!validateDepartingDate($dep_date)) {
    showError('Your Departing Date is not Valid.');
} else if (!validateDepartingReturningDate()) {
    showDepartingReturningErr();
} else if (!isNotEmpty($flying_from) || strLen($flying_from) > 100) {
    showError('Your Starting/Flying From place is not Valid.');
} else if (!isNotEmpty($flying_to) || strLen($flying_to) > 100) {
    showError('Your Destination/Going to place is not Valid.');
} else {
    showError('Please fill all required fields with valid value.');
}


?>

<!-- // -->