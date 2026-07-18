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

$p_name =test_input($_POST['ful_name']);
$email =test_input($_POST['email']);
$phone =test_input($_POST['phoneNumber']);
$trip_type =test_input($_POST['trip_type']);
$departure =test_input($_POST['origin']);
$arrival =test_input($_POST['destination']);
$departure_date =test_input($_POST['departing_date']);
$arrival_date =test_input($_POST['leaving_date']);
$number_of_adult =test_input($_POST['adults']);
$number_of_child =test_input($_POST['child']);
$number_of_infant =test_input($_POST['infants']);
$flight_type="Two Way";
$extra_details=test_input($_POST['extra_detail']);
$prefered_airline=test_input($_POST['airline_name']);
$travel_class=test_input($_POST['class_name']);
$source_id =2;
$siteurl ="Inquiry Via Ask for Price";

$form_name=test_input($_POST['form_name']);


	// primary validate function
	function validate($str) {
		return trim(htmlspecialchars($str));
	}

	if (empty($p_name)) {
		$nameError = 'Name should be filled';
	}

	if (empty($email)) {
		$emailError = 'Please enter your email';
	} else {
		$email = validate($_POST['email']);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailError = 'Invalid Email';
		}
	}
	if (empty($phone)) {
		$phoneError = 'Please enter your phonenumber';
	}
	if (empty($departure)) {
		$destinationError = 'Please enter your Departure destination';
	}
	
	if (empty($arrival)) {
		$destinationError = 'Please enter your destination';
	} 
	if (empty($departure_date)) {
		$departuredateError = 'Please provide departure date';
	}
	if (empty($arrival_date)) {
		$departuredateError = 'Please provide departure date';
	}
	
	if (empty($nameError) && empty($emailError) && empty($phoneError) && empty($originError) && empty($destinationError) && empty($departuredateError) ) {
		// great form filling
		
   include '../tms92/tms92-db-connector.php' ;
   //include '../vr2-mailer/mailer-ask-for-price.php' ;
		
		exit(); // terminates the script
	}
	else{
	    
	   echo "Someting Went wrong";
	}

}

?>
