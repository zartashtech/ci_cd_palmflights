<?php

if (!defined('PF_FORM_SECURE') && (basename($_SERVER['SCRIPT_FILENAME'] ?? '') === basename(__FILE__) || basename($_SERVER['PHP_SELF'] ?? '') === basename(__FILE__))) {
    http_response_code(403);
    exit('Access Denied');
}

$baseUrl="www.palmflights.co.uk";
$web_reletive_dir="/";

// Hide errors from visitors to protect system internals
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);

// Only Change These values for every website
$company = "2";
$success="success.php";

// Database credentials
$servername = "tms.palmflights.co.uk";
$username = "tms_pf_leads_user";
$password = "Nx/y]Ya[HkQ;Xe*C=g8786";
$dbname = "tms_pf_db";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    error_log("Database connection failed: " . mysqli_connect_error());
    exit("Service temporarily unavailable. Please try again later.");
}

// Static Values for All Websites
$user_id = 19;
$creation_date_time = date('Y-m-d H:i:s');
$last_modified_date_time = date('Y-m-d H:i:s');
$is_verified = 0;
$status = 1;
$comment = "NULL";

// Variables from form (safe fallback)
$p_name          = !empty($p_name) ? $p_name : "NULL";
$phone           = !empty($phone) ? $phone : "NULL";
$email           = !empty($email) ? $email : "NULL";
$departure       = !empty($departure) ? $departure : "NULL";
$arrival         = !empty($arrival) ? $arrival : "NULL";
$departure_date  = !empty($departure_date) ? $departure_date : "NULL";
$arrival_date    = !empty($arrival_date) ? $arrival_date : "NULL";
$number_of_adult = !empty($number_of_adult) ? $number_of_adult : "NULL";
$number_of_child = !empty($number_of_child) ? $number_of_child : "NULL";
$number_of_infant= !empty($number_of_infant) ? $number_of_infant : "NULL";
$flight_type     = !empty($flight_type) ? $flight_type : "NULL";
$extra_details   = !empty($extra_details) ? $extra_details : "NULL";
$prefered_airline= !empty($prefered_airline) ? $prefered_airline : "Any";
$travel_class    = !empty($travel_class) ? $travel_class : "NULL";
$siteurl         = !empty($siteurl) ? $siteurl : "NULL";
$source_id       = !empty($source_id) ? $source_id : "NULL";
$custom_data_2   = !empty($custom_data_2) ? $custom_data_2 : "NULL";
$custom_data_3   = !empty($custom_data_3) ? $custom_data_3 : "NULL";

// Safety check: Do not insert completely empty or blank leads
if (($phone === "NULL" || empty($phone)) && ($email === "NULL" || empty($email))) {
    exit("Invalid lead data.");
}

// Prevent rapid duplicate submissions within 30 seconds
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$leadFingerprint = md5($phone . '_' . $email . '_' . $departure . '_' . $arrival . '_' . $p_name);
if (isset($_SESSION['pf_last_lead_fingerprint']) && $_SESSION['pf_last_lead_fingerprint'] === $leadFingerprint && (time() - ($_SESSION['pf_last_lead_time'] ?? 0) < 30)) {
    // Duplicate detected - safely redirect to success page without inserting duplicate record in database
    $fname    = ($p_name !== "NULL") ? $p_name : "";
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
    $url = $protocol . "://" . $baseUrl . $web_reletive_dir . $success . "?lastname=" . urlencode($fname);
    header("Location: $url");
    exit;
}
$_SESSION['pf_last_lead_fingerprint'] = $leadFingerprint;
$_SESSION['pf_last_lead_time'] = time();

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
        // ✅ WhatsApp send hook (plug & play)
        include __DIR__ . "/../../wa/wa_entry_point.php";

        // 🔹 Production → redirect to thank-you page
        $fname    = ($p_name !== "NULL") ? $p_name : "";
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";

        $url = $protocol . "://" . $baseUrl . $web_reletive_dir . $success . "?lastname=" . urlencode($fname);
        header("Location: $url");
        exit;
    } else {
        // Inquiry For Email & Contact No Only
    }
} else {
    error_log("TMS Lead insert error: " . $stmt->error);
    exit("We could not process your inquiry at this moment. Please call us directly.");
}

// Close connection
$stmt->close();
$conn->close();
?>
