<?php

$baseUrl="www.palmflights.co.uk";
$web_reletive_dir="/";


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Only Change These values for every website
$company = "2";
$success="success.php";

// Database credentials
$servername = "tms.palmflights.co.uk";
$username = "tms_pf_leads_user";
$password = "MLsw$8WIt*o2";
$dbname = "tms_pf_db";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Static Values for All Websites
$user_id = 19;
$creation_date_time = date('Y-m-d H:i:s');
$last_modified_date_time = date('Y-m-d H:i:s');
$is_verified = 0;
$status = 1;
$comment = "NULL";

// Variables from form (safe fallback)
$p_name          = $p_name          ?? "NULL";
$phone           = $phone           ?? "NULL";
$email           = $email           ?? "NULL";
$departure       = $departure       ?? "NULL";
$arrival         = $arrival         ?? "NULL";
$departure_date  = $departure_date  ?? "NULL";
$arrival_date    = $arrival_date    ?? "NULL";
$number_of_adult = $number_of_adult ?? "NULL";
$number_of_child = $number_of_child ?? "NULL";
$number_of_infant= $number_of_infant?? "NULL";
$flight_type     = $flight_type     ?? "NULL";
$extra_details   = $extra_details   ?? "NULL";
$prefered_airline= $prefered_airline?? "Any";
$travel_class    = $travel_class    ?? "NULL";
$siteurl         = $siteurl         ?? "NULL";
$source_id       = $source_id       ?? "NULL";
$custom_data_2   = $custom_data_2   ?? "NULL";
$custom_data_3   = $custom_data_3   ?? "NULL";

// form_name comes from validation.php, fallback to NULL if missing
$form_name = isset($form_name) ? $form_name : "NULL";

// WhatsApp needs a human-friendly timestamp
$submitted_at = date('d M Y, h:i A');  // Example: 29 Aug 2025, 11:55 AM

// Insert Query
$stmt = $conn->prepare("INSERT INTO leads (
    user_id, p_name, phone, email, departure, arrival, departure_date, arrival_date,
    number_of_adult, number_of_child, number_of_infant, company, flight_type, extra_details,
    prefered_airline, travel_class, comment, status, creation_date_time, last_modified_date_time,
    is_verified, siteurl, source_id, custom_data_2, custom_data_3
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param(
    "issssssssssssssssississss",
    $user_id, $p_name, $phone, $email, $departure, $arrival, $departure_date, $arrival_date,
    $number_of_adult, $number_of_child, $number_of_infant, $company, $flight_type, $extra_details,
    $prefered_airline, $travel_class, $comment, $status, $creation_date_time, $last_modified_date_time,
    $is_verified, $siteurl, $source_id, $custom_data_2, $custom_data_3
);


// Execute the statement
if ($stmt->execute()) {
    // Check if the inquiry is "Inquiry For Email & Contact No Only"
    if ($siteurl !== "Inquiry For Email & Contact No Only") {
        // For normal submissions, perform the redirect
        // ✅ WhatsApp send hook (plug & play)
    echo 'hello';

    // ✅ WhatsApp send hook (plug & play)
    include __DIR__ . "/../../wa/wa_entry_point.php";

    // 🔹 Production → redirect to thank-you page
    $fname    = $p_name;
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";

    $url = $protocol . "://" . $baseUrl . $web_reletive_dir . $success . "?lastname=" . urlencode($fname);
    header("Location: $url");
    exit;
    } else {
        // echo "Inquiry For Email & Contact No Only";
       
    }
} else {
    echo "Error: " . $stmt->error;

}

// Close connection
$stmt->close();
$conn->close();
?>
