<?php
$mydate = strtotime($_SESSION['departing_date']);
// $mydate2= date('M', $mydate);
$mydateint= (int) date('md', $mydate);
//echo $mydateint;

$season_query = "select * from seasonal_fare where sdate<=$mydateint and edate>=$mydateint";
$seasonal_row = mysqli_query($con, $season_query);
$seasonal_row_data=mysqli_fetch_array($seasonal_row);

$season_month=$seasonal_row_data['sdate'];
$season_nature=$seasonal_row_data['nature'];
$season_percentage=$seasonal_row_data['percentage'];

/** adult_fare here **/
$adultfare = $row['adult_fare'];

if ($season_nature=='positive') {
  $row['adult_fare'] = (round ($adultfare +
round(($season_percentage/100) * $adultfare) ,3)) ;
} else {
  $row['adult_fare'] = (round ($adultfare -
round(($season_percentage/100) * $adultfare) ,3)) ;
}

// echo "..($adultfare)...";
//echo $row['adult_fare'];

/** child_fare here **/
$childfare = $row['child_fare'];
if ($season_nature=='positive') {
$row['child_fare'] = (round ($childfare +
round(($season_percentage/100) * $childfare) ,3)) ;
} else {
$row['child_fare'] = (round ($childfare -
round(($season_percentage/100) * $childfare) ,3)) ;
}

// echo "..($childfare)...";
// echo $row['child_fare'];


/** infant_fare here **/
$infantfare = $row['infant_fare'];

/** // round formullah  $row['infant_fare'] = (round ($infantfare + ($season_percentage/100 ) * $infantfare ,3)) ; **/

if ($season_nature=='positive') {
$row['infant_fare'] = (round ($infantfare +
round(($season_percentage/100) * $infantfare) ,3)) ;
} else {
$row['infant_fare'] = (round ($infantfare -
round(($season_percentage/100) * $infantfare) ,3)) ;
}

// echo "..($infantfare)...";
// echo $row['infant_fare'];

// here is code for domain level fare

$domain_name=$_SERVER['HTTP_HOST'];

$domain_fare_query = "select * from website_based_fares where domain='$domain_name'";
$domain_fare_row = mysqli_query($con, $domain_fare_query);
$domain_fare_row_data=mysqli_fetch_array($domain_fare_row);

$fare_domain=$domain_fare_row_data['domain'];
$fare_nature=$domain_fare_row_data['nature'];
$fare_percentage=$domain_fare_row_data['percentage'];

//echo $fare_domain ;
//echo $fare_nature ;
//echo $fare_percentage ;



/** adult_fare here **/
$adultfare = $row['adult_fare'];

if ($fare_nature=='positive') {
  $row['adult_fare'] = (round ($adultfare +
round(($fare_percentage/100) * $adultfare) ,3)) ;
} else {
  $row['adult_fare'] = (round ($adultfare -
round(($fare_percentage/100) * $adultfare) ,3)) ;
}

/** child_fare here **/
$childfare = $row['child_fare'];
if ($fare_nature=='positive') {
$row['child_fare'] = (round ($childfare +
round(($fare_percentage/100) * $childfare) ,3)) ;
} else {
$row['child_fare'] = (round ($childfare -
round(($fare_percentage/100) * $childfare) ,3)) ;
}

// echo "..($childfare)...";
// echo $row['child_fare'];


/** infant_fare here **/
$infantfare = $row['infant_fare'];

/** // round formullah  $row['infant_fare'] = (round ($infantfare + ($season_percentage/100 ) * $infantfare ,3)) ; **/

if ($fare_nature=='positive') {
$row['infant_fare'] = (round ($infantfare +
round(($fare_percentage/100) * $infantfare) ,3)) ;
} else {
$row['infant_fare'] = (round ($infantfare -
round(($fare_percentage/100) * $infantfare) ,3)) ;
}

//echo "..($infantfare)...";
//echo $row['infant_fare'];



?>