<?php
 $server = 'localhost';
 $user = 'fms_web';
 $pass = 'r1@ie*.hre32';
 $db = 'fms_db';
$con=mysqli_connect("$server","$user","$pass","$db");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
