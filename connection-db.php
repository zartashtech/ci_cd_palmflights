<?php
require_once __DIR__ . '/global.php';
$con=mysqli_connect("$server","$user","$pass","$db");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
