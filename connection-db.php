<?php
 $server = 'fms.candfsystems.com';
 $user = 'fms_web_cfdev';
 $pass = 'Br2*a7b+!roVAR"';
 $db = 'fms_db';
$con=mysqli_connect("$server","$user","$pass","$db");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>