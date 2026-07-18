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

$p_name =test_input($_POST['fname']);
$email =test_input($_POST['email']);
$phone =test_input($_POST['phoneNumber']);
$departure =test_input($_POST['origin']);
$arrival =test_input($_POST['destination']);
$departure_date =test_input($_POST['departing_date']);
$arrival_date =test_input($_POST['leaving_date']);
$number_of_adult =test_input($_POST['passenger']);
$source_id =2;
$siteurl ="Search Result Inquiry Via Callback Request";

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
		$departuredateError = 'Please provide departure date';
	} 
	if (empty($departure_date)) {
		$leavingDateError = 'Please enter your return date';
	} 
	

	if (empty($nameError) ) {
		// great form filling
		
   include '../tms92/tms92-db-connector.php' ;
   //include '../vr2-mailer/mailer-search-result-sidebar-call-back-request.php' ;
	
		exit(); // terminates the script
	}
	else{
	    
	   echo "problem is still";
	}

}

?>
