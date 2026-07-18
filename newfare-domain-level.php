<?PHP
/** Fetch domain based fare **/			
$domain_name=$_SERVER['HTTP_HOST'];			

$domain_fare_query = "select * from website_based_fares where domain='$domain_name'";
$domain_fare_row = mysqli_query($con, $domain_fare_query);
$domain_fare_row_data=mysqli_fetch_array($domain_fare_row);

$fare_domain=$domain_fare_row_data['domain'];
$fare_nature=$domain_fare_row_data['nature'];
$fare_percentage=$domain_fare_row_data['percentage'];

/** adult_fare here **/
$adultfare = $rows['adult_fare'];


if ($fare_nature=='positive') {
  $adult_fare_new = (round ($adultfare +
round(($fare_percentage/100) * $adultfare) ,3)) ;
} else {
  $adult_fare_new = (round ($adultfare -
round(($fare_percentage/100) * $adultfare) ,3)) ;
}

$rows['adult_fare']=$adult_fare_new ;

?>