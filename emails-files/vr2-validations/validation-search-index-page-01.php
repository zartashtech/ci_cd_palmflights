<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    function test_input($dataValidate)
{
    $dataValidate = trim($dataValidate);
    $dataValidate = stripslashes($dataValidate);
    $dataValidate = htmlspecialchars($dataValidate);
    $dataValidate = strip_tags($dataValidate);
    return $dataValidate;
}


$p_name ="Call Only";
$email =test_input($_POST['customeremail']);
$phone =test_input($_POST['customerphone']);
$flight_type =test_input($_POST['trip_type']);
$departure =test_input($_POST['origin']);
$arrival =test_input($_POST['destination']);
$departure_date =test_input($_POST['start']);
$arrival_date =test_input($_POST['end']);
$number_of_adult =test_input($_POST['adults']);
$number_of_child =test_input($_POST['child']);
$number_of_infant =test_input($_POST['infants']);
$prefered_airline=test_input($_POST['airline_name']);
$travel_class=test_input($_POST['class_name']);
$source_id =2;
$siteurl ="Inquiry For Email & Contact No Only";



	// primary validate function
	function validate($str) {
		return trim(htmlspecialchars($str));
	}

	if (empty($email)) {
		$emailError = 'Please enter your email';
	} else {
		$email = validate($_POST['customeremail']);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailError = 'Invalid Email';
		}
	}
    if (empty($phone)) {
		$phoneError = 'Please enter your phonenumber';
	} 	
	if (empty($departure)) {
		$originError = 'Please enter your origin';
	} 
	
	if (empty($arrival)) {
		$destinationError = 'Please enter your destination';
	} 
	if (empty($departure_date)) {
		$departuredateError = 'Please provide departure date';
	} 
	if (empty($arrival_date)) {
		$leavingDateError = 'Please enter your return';
	} 
	

	if (empty($emailError)) {
		// great form filling
		
   include 'emails-files/tms92/tms92-db-connector.php' ;
   
   
   //include 'emails-files/vr2-mailer/mailer-search-index-page-01.php' ;
   
   
		
	}
	else{
	    
	   echo "Someting Went wrong";
	}

}

?>