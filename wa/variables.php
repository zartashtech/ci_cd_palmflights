<?php
/**
 * WA Variables Mapper
 * -------------------
 * Maps CRM variables into WA-prefixed variables.
 * Rule:
 *  - If CRM variable not set → default to ""
 *  - Whatsoza skips empty fields when building payload
 */

// Import variables defined in validation/DB connector
global $p_name, $email, $phone, $flight_type, $departure, $arrival,
       $departure_date, $arrival_date, $number_of_adult, $number_of_child,
       $number_of_infant, $prefered_airline, $travel_class, $extra_details,
       $source_id, $siteurl, $custom_data_3, $form_name;

// --- Lead core fields ---
$wa_p_name        = $p_name            ?? "";
$wa_email         = $email             ?? "";
$wa_phone         = $phone             ?? "";

// --- Flight info ---
$wa_flight_type     = $flight_type       ?? "";
$wa_departure       = $departure         ?? "";
$wa_arrival         = $arrival           ?? "";
$wa_departure_date  = $departure_date    ?? "";
$wa_arrival_date    = $arrival_date      ?? "NA";
$wa_number_of_adult = $number_of_adult   ?? "";
$wa_number_of_child = $number_of_child   ?? "";
$wa_number_of_infant= $number_of_infant  ?? "";
$wa_prefered_airline= $prefered_airline  ?? "";
$wa_travel_class    = $travel_class      ?? "";

// --- Extra details ---
$wa_extra_details = $extra_details     ?? "";
$wa_source_id     = $source_id         ?? "";
$wa_siteurl       = $siteurl           ?? "";
$wa_airfare       = $custom_data_3     ?? "";

// --- Meta ---
$wa_form_name     = $form_name ?? "default_message"; // ✅ fixed to pick real form_name
$wa_submitted_at  = date('d M Y, h:i A');

$wa_extra_flight_details = trim(
    "Flight Type: " . ($wa_flight_type ?: "N/A") .
    " || Class: " . ($wa_travel_class ?: "N/A") .
    " || Selected airline: " . ($wa_prefered_airline ?: "N/A")
);

$wa_extra_flight_details_oneway = trim(
    "Class: " . ($wa_travel_class ?: "N/A") .
    " || Selected airline: " . ($wa_prefered_airline ?: "N/A")
);

$wa_extra_flight_details_twoway = trim(
    "Flight Type: " . ($wa_flight_type ?: "N/A") .
    " || Class: " . ($wa_travel_class ?: "N/A") .
    " || Selected airline: " . ($wa_prefered_airline ?: "N/A")
);

// 🔹 Return all $wa_* vars as associative array
return get_defined_vars();
