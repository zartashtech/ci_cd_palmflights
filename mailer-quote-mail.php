<?php

include('loading/phpmailer/class.phpmailer.php');
include('loading/phpmailer/class.smtp.php');

// include('connection-db.php');

function test_input($dataValidate)
{
    $dataValidate = trim($dataValidate);
    $dataValidate = stripslashes($dataValidate);
    $dataValidate = htmlspecialchars($dataValidate);
    $dataValidate = strip_tags($dataValidate);
    return $dataValidate;
}

$fname = test_input($_POST['ful_name']);
$email = test_input($_POST['email']);
// $contact_no= test_input($_POST['country_code']).test_input($_POST['phoneNumber']);
$contact_no = test_input($_POST['phoneNumber']);
$trip_type = test_input($_POST['trip_type']);
$class_name = test_input($_POST['class_name']);
$airline_name = test_input($_POST['airline_name']);
$origin = test_input($_POST['origin']);
$destination = test_input($_POST['destination']);
$return_date = test_input($_POST['leaving_date']);
$departure_date = test_input($_POST['departing_date']);
$flight_route = test_input($_POST['flight_route']);
$extra_detail = test_input($_POST['extra_detail']);
$adults = test_input($_POST['adults']);
$child = test_input($_POST['child']);
$infant = test_input($_POST['infants']);
$ip_country = test_input($_POST['ip_country']);
$ip = test_input($_POST['ip']);
$device = test_input($_POST['device']);
$query_form = test_input($_POST['query_form']);
$query_date = test_input($_POST['query_date']);
if (isset($_POST['newsletter'])) {
    $newsletter = test_input($_POST['newsletter']);
} else {
    $newsletter = "No";
}


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

function validateDepartingDate($depDateval)
{
    $strTimeDeparting = str_replace("-", "", date_format(date_create($depDateval), "Y-m-d"));
    $today = str_replace("-", "", date("Y-m-d"));

    if (isNotEmpty($depDateval) && $strTimeDeparting >= $today) {
        return true;
    }
    return false;
}

function validateDepartingReturningDate()
{
    $depDate = test_input($_POST['departing_date']);
    $retDate = test_input($_POST['leaving_date']);
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

function showDepartingReturningErr()
{
    $depDate = test_input($_POST['departing_date']);
    $retDate = test_input($_POST['leaving_date']);
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

    $subject = 'New Quotation at Palm Flights LTD';

    // $headers = "From:sales@palmflights.co.uk\r\n";
    // $headers .= "Reply-To: sales@palmflights.co.uk\r\n";

    // $headers .= "MIME-Version: 1.0\r\n";
    // $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $message = '<html><body>';
    $message .= '<h2 style="color: #006dad;">Palm <span style="color: #1193ce;"> Flights LTD</span> Quotation Booking Details</h2><br />';
    $message .= '<table rules="all" style="border-color: #666;" align:"center" cellpadding="12">';
    $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $fname . "</td></tr>";
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
    $message .= "<tr><td><strong>Newsletter Subscription:</strong> </td><td>" . $newsletter . "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";


    // mail($to, $subject, $message, $headers, '-fsales@palmflights.co.uk');

    // header("location:success.php?firstname=$fname&origin=$origin&destination=$destination&departing_date=$departure_date&leaving_date=$return_date&airline_name=$airline_name");

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
        header("location:success.php?firstname=$fname&origin=$origin&destination=$destination&departing_date=$departure_date&leaving_date=$return_date&airline_name=$airline_name");
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