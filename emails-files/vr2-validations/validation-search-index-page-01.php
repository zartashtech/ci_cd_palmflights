<?php
require_once __DIR__ . '/security-helper.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Anti-bot checks
    if (pf_is_bot_honeypot() || pf_is_bot_timing()) {
        exit('Request processed.');
    }

    $p_name           = "Call Only";
    $email            = pf_clean_input($_POST['customeremail'] ?? '');
    $phone            = pf_clean_input($_POST['customerphone'] ?? '');
    $flight_type      = pf_clean_input($_POST['trip_type'] ?? 'return');
    $departure        = pf_clean_input($_POST['origin'] ?? '');
    $arrival          = pf_clean_input($_POST['destination'] ?? '');
    $departure_date   = pf_clean_input($_POST['start'] ?? '');
    $arrival_date     = pf_clean_input($_POST['end'] ?? '');
    $number_of_adult  = pf_clean_input($_POST['adults'] ?? '1');
    $number_of_child  = pf_clean_input($_POST['child'] ?? '0');
    $number_of_infant = pf_clean_input($_POST['infants'] ?? '0');
    $prefered_airline = pf_clean_input($_POST['airline_name'] ?? 'ALL');
    $travel_class     = pf_clean_input($_POST['class_name'] ?? 'Economy');
    $source_id        = 2;
    $siteurl          = "Inquiry For Email & Contact No Only";
    $form_name        = pf_clean_input($_POST['form_name'] ?? 'search-index-01');

    // Strict validation
    $emailError = pf_validate_email($email);
    // If phone is provided, validate phone strictly as well
    $phoneError = !empty($phone) ? pf_validate_phone($phone) : null;
    $originError = empty($departure) ? 'Please enter departure.' : null;
    $destinationError = empty($arrival) ? 'Please enter destination.' : null;

    if (empty($emailError) && empty($phoneError) && empty($originError) && empty($destinationError)) {
        include __DIR__ . '/../tms92/tms92-db-connector.php';
    } else {
        $firstErr = $emailError ?? $phoneError ?? $originError ?? $destinationError ?? 'Please verify your search details.';
        error_log("Search validation failed: " . $firstErr);
    }
}
?>