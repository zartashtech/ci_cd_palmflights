<?php

// ===== Database 1 =====
$db1_host = "fms.candfsystems.com";
$db1_user = "fms_web_cfdev";
$db1_pass = "Br2*a7b+!roVAR";
$db1_name = "fms_db";

// ===== Database 2 =====
$db2_host = "tms.palmflights.co.uk";
$db2_user = "tms_pf_leads_user";
$db2_pass = "MLsw$8WIt*o2";
$db2_name = "tms_pf_db";

// Connect to FMS
$conn1 = new mysqli($db1_host, $db1_user, $db1_pass, $db1_name);

if ($conn1->connect_error) {
    echo "❌ FMS Connection Failed: " . $conn1->connect_error . "<br>";
} else {
    echo "✅ FMS Connected Successfully<br>";
}

// Connect to TMS
$conn2 = new mysqli($db2_host, $db2_user, $db2_pass, $db2_name);

if ($conn2->connect_error) {
    echo "❌ TMS Connection Failed: " . $conn2->connect_error . "<br>";
} else {
    echo "✅ TMS Connected Successfully<br>";
}

// Optional: Close connections
$conn1->close();
$conn2->close();

?>
