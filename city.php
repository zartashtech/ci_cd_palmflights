<?php
include ('connection-db.php');

$sql1="SELECT city FROM places WHERE place_string='$_SESSION[origin]'";

$sql2="SELECT city FROM places WHERE place_string='$_SESSION[destination]'";

$id1= mysqli_query($con,$sql1);
if($row1=mysqli_fetch_array($id1))
{
	$_SESSION['origin_city']=$row1['city'];
	//echo $_SESSION['origin_city'];
}


$id2= mysqli_query($con,$sql2);
if($row2=mysqli_fetch_array($id2))
{
	$_SESSION['destination_city']=$row2['city'];
	//echo $_SESSION['destination_city'];
}

?>