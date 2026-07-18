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


$p_name =test_input($_POST['firstname']);
$email =test_input($_POST['email']);
$phone =test_input($_POST['phoneNumber']);
$flight_type =test_input($_GET['trip_type']);
$departure =test_input($_GET['origin']);
$arrival =test_input($_GET['destination']);
$departure_date =test_input($_GET['departing_date']);
$arrival_date =test_input($_GET['leaving_date']);
$number_of_adult =test_input($_GET['adults']);
$number_of_child =test_input($_GET['child']);
$number_of_infant =test_input($_GET['infants']);
$prefered_airline=test_input($_GET['airline_name']);
$travel_class=test_input($_GET['class_name']);
$source_id =2;
$siteurl ="Inquiry via Search Mechanism";
$custom_data_3=test_input($_GET['totalFare']);

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
	

	if (empty($nameError) ) {
		// great form filling
		
   include '../tms92/tms92-db-connector.php' ;
   //include '../vr2-mailer/mailer-booking-via-search.php' ;
   
		
		exit(); // terminates the script
	}
	else{
	    
	   echo "Someting Went wrong";
	}

}

?>
