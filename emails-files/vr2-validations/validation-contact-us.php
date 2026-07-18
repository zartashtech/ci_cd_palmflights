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

$p_name =test_input($_POST['name']);
$email =test_input($_POST['mail']);
$phone =test_input($_POST['cell']);
$extra_details=test_input($_POST['msg']);
$source_id =2;
$siteurl ="Inquiry Via Contact Us";

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
		$email = validate($_POST['mail']);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailError = 'Invalid Email';
		}
	}
    if (empty($phone)) {
		$phoneError = 'Please enter your phonenumber';
	} 	
	if (empty($extra_details)) {
		$messageError = 'Please enter your message';
	} 
	
	if (empty($nameError) && empty($emailError) && empty($phoneError)  && empty($messageError) ) {
		// great form filling
		
   include '../tms92/tms92-db-connector.php' ;
   //include '../vr2-mailer/mailer-contact-us.php' ;
		
		exit(); // terminates the script
	}
	else{
	    
	   echo "Someting Went wrong";
	}

}

?>
