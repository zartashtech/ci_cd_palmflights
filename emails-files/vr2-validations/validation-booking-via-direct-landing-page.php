<?php
require_once __DIR__ . '/security-helper.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Anti-bot checks
    if (pf_is_bot_honeypot() || pf_is_bot_timing()) {
        // Silently drop bot submissions without writing to DB or triggering notifications
        exit('Request processed.');
    }

    $p_name           = pf_clean_input($_POST['firstname'] ?? '');
    $email            = pf_clean_input($_POST['email'] ?? '');
    $phone            = pf_clean_input($_POST['phoneNumber'] ?? '');
    $departure        = pf_clean_input($_GET['origin'] ?? '');
    $arrival          = pf_clean_input($_GET['destination'] ?? '');
    $number_of_adult  = pf_clean_input($_GET['adults'] ?? '1');
    $number_of_child  = pf_clean_input($_GET['child'] ?? '0');
    $number_of_infant = pf_clean_input($_GET['infants'] ?? '0');
    $prefered_airline = pf_clean_input($_GET['airline_name'] ?? 'Any');
    $travel_class     = pf_clean_input($_GET['class_name'] ?? 'Economy');
    $flight_type      = "Two Way";
    $source_id        = 2;
    $siteurl          = "Inquiry Via Landing page";
    $form_name        = pf_clean_input($_POST['form_name'] ?? 'book-via-direct-lp');

    // Strict validation
    $nameError = pf_validate_name($p_name);
    $emailError = pf_validate_email($email);
    $phoneError = pf_validate_phone($phone);

    $originError = empty($departure) ? 'Please enter departure.' : null;
    $destinationError = empty($arrival) ? 'Please enter destination.' : null;

    if (empty($nameError) && empty($emailError) && empty($phoneError) && empty($originError) && empty($destinationError)) {
        // Validation passed - proceed to secure database insertion
        include '../tms92/tms92-db-connector.php';
        exit();
    } else {
        $firstErr = $nameError ?? $emailError ?? $phoneError ?? $originError ?? $destinationError ?? 'Please verify your information.';
        echo "<script>alert(" . json_encode($firstErr) . "); window.history.back();</script>";
        exit();
    }
}
?>
