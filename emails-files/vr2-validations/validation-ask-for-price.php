<?php
require_once __DIR__ . '/security-helper.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Anti-bot checks
    if (pf_is_bot_honeypot() || pf_is_bot_timing()) {
        exit('Request processed.');
    }

    $p_name           = pf_clean_input($_POST['ful_name'] ?? '');
    $email            = pf_clean_input($_POST['email'] ?? '');
    $phone            = pf_clean_input($_POST['phoneNumber'] ?? '');
    $trip_type        = pf_clean_input($_POST['trip_type'] ?? 'Two Way');
    $departure        = pf_clean_input($_POST['origin'] ?? '');
    $arrival          = pf_clean_input($_POST['destination'] ?? '');
    $departure_date   = pf_clean_input($_POST['departing_date'] ?? '');
    $arrival_date     = pf_clean_input($_POST['leaving_date'] ?? '');
    $number_of_adult  = pf_clean_input($_POST['adults'] ?? '1');
    $number_of_child  = pf_clean_input($_POST['child'] ?? '0');
    $number_of_infant = pf_clean_input($_POST['infants'] ?? '0');
    $flight_type      = "Two Way";
    $extra_details    = pf_clean_input($_POST['extra_detail'] ?? '');
    $prefered_airline = pf_clean_input($_POST['airline_name'] ?? 'Any');
    $travel_class     = pf_clean_input($_POST['class_name'] ?? 'Economy');
    $source_id        = 2;
    $siteurl          = "Inquiry Via Ask for Price";
    $form_name        = pf_clean_input($_POST['form_name'] ?? 'ask-for-price');

    // Strict validation
    $nameError = pf_validate_name($p_name);
    $emailError = pf_validate_email($email);
    $phoneError = pf_validate_phone($phone);
    $originError = empty($departure) ? 'Please enter departure.' : null;
    $destinationError = empty($arrival) ? 'Please enter destination.' : null;

    if (empty($nameError) && empty($emailError) && empty($phoneError) && empty($originError) && empty($destinationError)) {
        include '../tms92/tms92-db-connector.php';
        exit();
    } else {
        $firstErr = $nameError ?? $emailError ?? $phoneError ?? $originError ?? $destinationError ?? 'Please verify your information.';
        echo "<script>alert(" . json_encode($firstErr) . "); window.history.back();</script>";
        exit();
    }
}
?>
