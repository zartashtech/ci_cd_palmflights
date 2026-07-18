<?php
/**
 * sanitizers.php
 * --------------
 * Placeholder sanitizers for WhatsApp template fields.
 * Each function can later be customized per business rules.
 */

/* =======================================================
   Shared sanitizers (reusable across forms)
   ======================================================= */

/** Default passthrough (trim + strip HTML) */
function passthrough($value) {
    return is_string($value) ? trim(strip_tags($value)) : $value;
}

/**
 * Universal Name Sanitizer
 * Allows Unicode letters, spaces, dash, apostrophe, dot
 */
function sanitize_name($value) {
    $value = trim($value);
    $value = strip_tags($value);
    $value = preg_replace("/[^\p{L}\s\-\'.]/u", "", $value); // remove unwanted
    $value = preg_replace("/\s+/", " ", $value);             // normalize spaces
    $value = substr($value, 0, 50);                          // limit length
    return $value;
}

/** Date sanitizer (YYYY-MM-DD) */
function dateSanitizer($value) {
    $ts = strtotime($value);
    return $ts ? date("Y-m-d", $ts) : passthrough($value);
}

/** Human-friendly date (31 Aug 2025, 09:30 AM) */
function humanDateSanitizer($value) {
    $ts = strtotime($value);
    return $ts ? date("d M Y, h:i A", $ts) : passthrough($value);
}

/** Price sanitizer (numeric with 2 decimals) */
function priceSanitizer($value) {
    $num = preg_replace('/[^\d.]/', '', (string)$value);
    return is_numeric($num) ? number_format((float)$num, 2) : passthrough($value);
}

/** Phone sanitizer (digits only, ensure + prefix) */
function phoneSanitizer($value) {
    $digits = preg_replace('/\D+/', '', (string)$value);
    if (empty($digits)) return passthrough($value);
    return '+' . $digits;
}

/** Text sanitizer */
function textSanitizer($value) {
    return trim(strip_tags((string)$value));
}

/* =======================================================
   ask-for-price
   ======================================================= */
function ask_for_price_field_1($v){ return sanitize_name($v); }
function ask_for_price_field_2($v){ return passthrough($v); }
function ask_for_price_field_3($v){ return passthrough($v); }
function ask_for_price_field_4($v){ return phoneSanitizer($v); }
function ask_for_price_field_5($v){ return passthrough($v); }
function ask_for_price_field_6($v){ return passthrough($v); }
function ask_for_price_field_7($v){ return passthrough($v); }
function ask_for_price_field_8($v){ return passthrough($v); }
function ask_for_price_field_9($v){ return passthrough($v); }

/* =======================================================
   book-via-direct-lp
   ======================================================= */
function book_via_direct_lp_field_1($v){ return sanitize_name($v); }
function book_via_direct_lp_field_2($v){ return passthrough($v); }
function book_via_direct_lp_field_3($v){ return passthrough($v); }
function book_via_direct_lp_field_4($v){ return passthrough($v); }
function book_via_direct_lp_field_5($v){ return phoneSanitizer($v); }
function book_via_direct_lp_field_6($v){ return passthrough($v); }
function book_via_direct_lp_field_7($v){ return passthrough($v); }
function book_via_direct_lp_field_8($v){ return passthrough($v); }
function book_via_direct_lp_field_9($v){ return passthrough($v); }
function book_via_direct_lp_field_10($v){ return passthrough($v); }

/* =======================================================
   book-via-search-gds-oneway
   ======================================================= */
function book_via_search_gds_oneway_field_1($v){ return sanitize_name($v); }
function book_via_search_gds_oneway_field_2($v){ return passthrough($v); }
function book_via_search_gds_oneway_field_3($v){ return passthrough($v); }
function book_via_search_gds_oneway_field_4($v){ return passthrough($v); }
function book_via_search_gds_oneway_field_5($v){ return phoneSanitizer($v); }
function book_via_search_gds_oneway_field_6($v){ return passthrough($v); }
function book_via_search_gds_oneway_field_7($v){ return passthrough($v); }
function book_via_search_gds_oneway_field_8($v){ return passthrough($v); }
function book_via_search_gds_oneway_field_9($v){ return passthrough($v); }
function book_via_search_gds_oneway_field_10($v){ return passthrough($v); }

/* =======================================================
   book-via-search-gds-twoway
   ======================================================= */
function book_via_search_gds_twoway_field_1($v){ return sanitize_name($v); }
function book_via_search_gds_twoway_field_2($v){ return passthrough($v); }
function book_via_search_gds_twoway_field_3($v){ return passthrough($v); }
function book_via_search_gds_twoway_field_4($v){ return passthrough($v); }
function book_via_search_gds_twoway_field_5($v){ return phoneSanitizer($v); }
function book_via_search_gds_twoway_field_6($v){ return passthrough($v); }
function book_via_search_gds_twoway_field_7($v){ return passthrough($v); }
function book_via_search_gds_twoway_field_8($v){ return passthrough($v); }
function book_via_search_gds_twoway_field_9($v){ return passthrough($v); }
function book_via_search_gds_twoway_field_10($v){ return passthrough($v); }

/* =======================================================
   book-via-search-non-gds
   ======================================================= */
function book_via_search_non_gds_field_1($v){ return sanitize_name($v); }
function book_via_search_non_gds_field_2($v){ return passthrough($v); }
function book_via_search_non_gds_field_3($v){ return passthrough($v); }
function book_via_search_non_gds_field_4($v){ return passthrough($v); }
function book_via_search_non_gds_field_5($v){ return phoneSanitizer($v); }
function book_via_search_non_gds_field_6($v){ return passthrough($v); }
function book_via_search_non_gds_field_7($v){ return passthrough($v); }
function book_via_search_non_gds_field_8($v){ return passthrough($v); }
function book_via_search_non_gds_field_9($v){ return passthrough($v); }
function book_via_search_non_gds_field_10($v){ return passthrough($v); }

/* =======================================================
   cb-request
   ======================================================= */
function cb_request_field_1($v){ return sanitize_name($v); }
function cb_request_field_2($v){ return passthrough($v); }
function cb_request_field_4($v){ return passthrough($v); }
function cb_request_field_5($v){ return phoneSanitizer($v); }
function cb_request_field_6($v){ return passthrough($v); }
function cb_request_field_7($v){ return passthrough($v); }
function cb_request_field_8($v){ return passthrough($v); }

/* =======================================================
   contact-us
   ======================================================= */
function contact_us_field_1($v){ return sanitize_name($v); }
function contact_us_field_2($v){ return passthrough($v); }
function contact_us_field_4($v){ return passthrough($v); }
function contact_us_field_5($v){ return phoneSanitizer($v); }

/* =======================================================
   gds-no-flight
   ======================================================= */
function gds_no_flight_field_1($v){ return sanitize_name($v); }
function gds_no_flight_field_2($v){ return passthrough($v); }
function gds_no_flight_field_3($v){ return passthrough($v); }
function gds_no_flight_field_4($v){ return passthrough($v); }
function gds_no_flight_field_5($v){ return phoneSanitizer($v); }
function gds_no_flight_field_6($v){ return passthrough($v); }
function gds_no_flight_field_7($v){ return passthrough($v); }
function gds_no_flight_field_8($v){ return passthrough($v); }
function gds_no_flight_field_9($v){ return passthrough($v); }
function gds_no_flight_field_10($v){ return passthrough($v); }

/* =======================================================
   lp-cb-request-sidebar
   ======================================================= */
function lp_cb_request_sidebar_field_1($v){ return sanitize_name($v); }
function lp_cb_request_sidebar_field_2($v){ return passthrough($v); }
function lp_cb_request_sidebar_field_3($v){ return passthrough($v); }
function lp_cb_request_sidebar_field_4($v){ return passthrough($v); }
function lp_cb_request_sidebar_field_5($v){ return phoneSanitizer($v); }
function lp_cb_request_sidebar_field_6($v){ return passthrough($v); }
function lp_cb_request_sidebar_field_7($v){ return passthrough($v); }
function lp_cb_request_sidebar_field_8($v){ return passthrough($v); }
function lp_cb_request_sidebar_field_9($v){ return passthrough($v); }

/* =======================================================
   lp-cb-request
   ======================================================= */
function lp_cb_request_field_1($v){ return sanitize_name($v); }
function lp_cb_request_field_2($v){ return passthrough($v); }
function lp_cb_request_field_3($v){ return passthrough($v); }
function lp_cb_request_field_4($v){ return passthrough($v); }
function lp_cb_request_field_5($v){ return phoneSanitizer($v); }
function lp_cb_request_field_6($v){ return passthrough($v); }
function lp_cb_request_field_7($v){ return passthrough($v); }
function lp_cb_request_field_8($v){ return passthrough($v); }
function lp_cb_request_field_9($v){ return passthrough($v); }
