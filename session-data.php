<?php

//header("Location: index.php");

session_start();
if (function_exists('test_input2')) {
	// echo "Function Exists"; 
} else {
	// echo "Function Not Found, This name Can be used!";
	function test_input2($dataValidate)
	{
		$dataValidate = trim($dataValidate);
		$dataValidate = stripslashes($dataValidate);
		$dataValidate = htmlspecialchars($dataValidate);
		$dataValidate = strip_tags($dataValidate);
		return $dataValidate;
	}
}

if ($_SERVER["REQUEST_METHOD"] == "POST") //in this sessions are saved
{
	$_SESSION['origin'] = test_input2($_POST['origin']);
	$_SESSION['destination'] = test_input2($_POST['destination']);
	$_SESSION['leaving_date'] = test_input2($_POST['end']);
	$_SESSION['departing_date'] = test_input2($_POST['start']);
	$_SESSION['airline_name'] = test_input2($_POST['airline_name']);
	$_SESSION['class_name'] = test_input2($_POST['class_name']);
	$_SESSION['trip_type'] = test_input2($_POST['trip_type']);
	if (isset($_POST['flight_route'])) {
		$_SESSION['flight_route'] = test_input2($_POST['flight_route']);
	} else {
		$_SESSION['flight_route'] = NULL;
	}

	if (isset($_POST['flexible_date'])) {
		$_SESSION['flexible_date'] = test_input2($_POST['flexible_date']);
	} else {
		$_SESSION['flexible_date'] = NULL;
	}

	$_SESSION['adults'] = test_input2($_POST['adults']);
	$_SESSION['child'] = test_input2($_POST['child']);
	$_SESSION['infants'] = test_input2($_POST['infants']);
}

include('city.php');


?>

<!-- // -->