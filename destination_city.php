<?php

if (function_exists('test_input')){
    // echo "Function Exists"; 
 }else{
    // echo "Function Not Found, This name Can be used!";
    function test_input($dataValidate) {
        $dataValidate = trim($dataValidate);
        $dataValidate = stripslashes($dataValidate);
        $dataValidate = htmlspecialchars($dataValidate);
        $dataValidate = strip_tags($dataValidate);
        return $dataValidate;
    }
 }


$page_url=$_SERVER['PHP_SELF'];
$sub_string = substr($page_url, 18);
$destination_url=test_input(ltrim($sub_string,'/'));

include('connection-db.php');

$sql1="SELECT * FROM places where destination_url='london.php' and airport_code='LHR'";
$sql2 = "SELECT * FROM places where destination_url='$destination_url'";
$origin= mysqli_query($con,$sql1);
$destinaion= mysqli_query($con,$sql2);
$rows=mysqli_fetch_array($origin);
$rows1=mysqli_fetch_array($destinaion);
$destination = $rows1['place_string'];
$destination_city = $rows1['city'];
$destination_url=$rows1['destination_url'];
$destination_country = $rows1['country'];
$destination_airport = $rows1['airport_code'];
$destination_airportname = $rows1['airport'];
$origin = $rows['place_string'];
$origin_city = $rows['city'];
$origin_country = $rows['country'];
$origin_airport = $rows['airport_code'];
//echo $origin;
//echo $destination;

$sql3="SELECT * FROM flight_detail where origin='$origin' and destination='$destination'and class_name='Economy' and trip_type='return' order by adult_fare asc limit 1";
$flight= mysqli_query($con,$sql3);
$rows2=mysqli_fetch_array($flight);
$sql3="SELECT airline_logo_large FROM airlines where origin='$origin' and destination='$destination' order by adult_fare asc limit 1";
$airline_name=$rows2['airline_name'];
$trip_type=$rows2['trip_type'];
$flight_duration=$rows2['flight_duration'];
$adult_fare=$rows2['adult_fare'];
//echo $airline_name;
//echo $airline_name;
//echo $trip_type;
//echo $adult_fare;

$sql4="SELECT airline_logo_large FROM airlines where airline_name='$airline_name'";
$img_logo= mysqli_query($con,$sql4);
$rows3=mysqli_fetch_array($img_logo);
$large_logo=$rows3['airline_logo_large'];;

$london_hathrow="London, London Heathrow Arpt [LHR], United Kingdom";

?>