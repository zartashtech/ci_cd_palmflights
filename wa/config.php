<?php 
return [

    // === Global Whatsmark API Config ===
    "base_url" => "https://app.whatsoza.com/api/v1",
    "tenant"   => "palmflights",   // Your subdomain from Whatsmark panel
    "token"    => "674b0c1b88524197eb6263845d0b9ebc8e279c19deb059dd206774db352c464a", // <-- replace with your actual API token

    // Default language (used if form-specific not set)
    "language" => "en_GB",      

    // === Debug toggles ===
    "debug"            => false,   // true → print payload, no redirect
    "enableDebugEmail" => true,    // true → send email on failure

    // === Pre-checks control ===
    "pre_checks" => [
        "sanitize_phone"     => true,
        "validate_phone"     => true,
        "limit_delivery"     => false,
        "validate_mandatory" => false,
    ],

    // === Per-form WhatsApp Template Config ===
    "forms" => [

        "ask-for-price" => [
            "enabled"       => true,
            "template_name" => "ask_for_price",
            "language"      => "en_GB",
            "fields" => [
                "field_1"  => ["var" => "wa_p_name",        "sanitize" => "ask_for_price_field_1"],
                "field_2"  => ["var" => "wa_submitted_at",  "sanitize" => "ask_for_price_field_2"],
                "field_3"  => ["var" => "wa_email",         "sanitize" => "ask_for_price_field_3"],
                "field_4"  => ["var" => "wa_phone",         "sanitize" => "ask_for_price_field_4"],
                "field_5"  => ["var" => "wa_departure",     "sanitize" => "ask_for_price_field_5"],
                "field_6"  => ["var" => "wa_arrival",       "sanitize" => "ask_for_price_field_6"],
                "field_7"  => ["var" => "wa_departure_date","sanitize" => "ask_for_price_field_7"],
                "field_8"  => ["var" => "wa_arrival_date",  "sanitize" => "ask_for_price_field_8"],
                "field_9" => ["var" => "wa_extra_flight_details","sanitize" => "ask_for_price_field_9"],
            ]
        ],

        "book-via-direct-lp" => [
            "enabled"       => false,
            "template_name" => "book_via_direct_lp",
            "language"      => "en_GB",
            "fields" => [
                "field_1"  => ["var" => "wa_p_name", "sanitize" => "book_via_direct_lp_field_1"],
                "field_2"  => ["var" => "wa_submitted_at", "sanitize" => "book_via_direct_lp_field_2"],
                "field_3"  => ["var" => "wa_airfare", "sanitize" => "book_via_direct_lp_field_3"],
                "field_4"  => ["var" => "wa_email", "sanitize" => "book_via_direct_lp_field_4"],
                "field_5"  => ["var" => "wa_phone", "sanitize" => "book_via_direct_lp_field_5"],
                "field_6"  => ["var" => "wa_departure", "sanitize" => "book_via_direct_lp_field_6"],
                "field_7"  => ["var" => "wa_arrival", "sanitize" => "book_via_direct_lp_field_7"],
                "field_8"  => ["var" => "wa_departure_date", "sanitize" => "book_via_direct_lp_field_8"],
                "field_9"  => ["var" => "wa_arrival_date", "sanitize" => "book_via_direct_lp_field_9"],
                "field_10" => ["var" => "wa_extra_flight_details", "sanitize" => "book_via_direct_lp_field_10"],
            ]
        ],

        "book-via-search-gds-oneway" => [
            "enabled"       => true,
            "template_name" => "book_via_search_gds_oneway",
            "language"      => "en_GB",
            "fields" => [
                "field_1"  => ["var" => "wa_p_name", "sanitize" => "book_via_search_gds_oneway_field_1"],
                "field_2"  => ["var" => "wa_submitted_at", "sanitize" => "book_via_search_gds_oneway_field_2"],
                "field_3"  => ["var" => "wa_airfare", "sanitize" => "book_via_search_gds_oneway_field_3"],
                "field_4"  => ["var" => "wa_email", "sanitize" => "book_via_search_gds_oneway_field_4"],
                "field_5"  => ["var" => "wa_phone", "sanitize" => "book_via_search_gds_oneway_field_5"],
                "field_6"  => ["var" => "wa_departure", "sanitize" => "book_via_search_gds_oneway_field_6"],
                "field_7"  => ["var" => "wa_arrival", "sanitize" => "book_via_search_gds_oneway_field_7"],
                "field_8"  => ["var" => "wa_departure_date", "sanitize" => "book_via_search_gds_oneway_field_8"],
                "field_9" => ["var" =>  "wa_flight_type", "sanitize" => "book_via_search_gds_oneway_field_9"],
                "field_10" => ["var" =>  "wa_extra_flight_details_oneway", "sanitize" => "book_via_search_gds_oneway_field_10"],
            ]
        ],

         "book-via-search-gds-twoway" => [
            "enabled"       => true,
            "template_name" => "book_via_search_gds_twoway",
            "language"      => "en_GB",
            "fields" => [
                "field_1"  => ["var" => "wa_p_name", "sanitize" => "book_via_search_gds_twoway_field_1"],
                "field_2"  => ["var" => "wa_submitted_at", "sanitize" => "book_via_search_gds_twoway_field_2"],
                "field_3"  => ["var" => "wa_airfare", "sanitize" => "book_via_search_gds_twoway_field_3"],
                "field_4"  => ["var" => "wa_email", "sanitize" => "book_via_search_gds_twoway_field_4"],
                "field_5"  => ["var" => "wa_phone", "sanitize" => "book_via_search_gds_twoway_field_5"],
                "field_6"  => ["var" => "wa_departure", "sanitize" => "book_via_search_gds_twoway_field_6"],
                "field_7"  => ["var" => "wa_arrival", "sanitize" => "book_via_search_gds_twoway_field_7"],
                "field_8"  => ["var" => "wa_departure_date", "sanitize" => "book_via_search_gds_twoway_field_8"],
                "field_9"  => ["var" => "wa_arrival_date", "sanitize" => "book_via_search_gds_twoway_field_9"],
                "field_10" => ["var" => "wa_extra_flight_details_twoway", "sanitize" => "book_via_search_gds_twoway_field_10"],
            ]
        ],

        "book-via-search-non-gds" => [
            "enabled"       => false,
            "template_name" => "book_via_search_non_gds",
            "language"      => "en_GB",
            "fields" => [
                "field_1"  => ["var" => "wa_p_name", "sanitize" => "book_via_search_non_gds_field_1"],
                "field_2"  => ["var" => "wa_submitted_at", "sanitize" => "book_via_search_non_gds_field_2"],
                "field_3"  => ["var" => "wa_airfare", "sanitize" => "book_via_search_non_gds_field_3"],
                "field_4"  => ["var" => "wa_email", "sanitize" => "book_via_search_non_gds_field_4"],
                "field_5"  => ["var" => "wa_phone", "sanitize" => "book_via_search_non_gds_field_5"],
                "field_6"  => ["var" => "wa_departure", "sanitize" => "book_via_search_non_gds_field_6"],
                "field_7"  => ["var" => "wa_arrival", "sanitize" => "book_via_search_non_gds_field_7"],
                "field_8"  => ["var" => "wa_departure_date", "sanitize" => "book_via_search_non_gds_field_8"],
                "field_9"  => ["var" => "wa_arrival_date", "sanitize" => "book_via_search_non_gds_field_9"],
                "field_10" => ["var" => "wa_extra_flight_details", "sanitize" => "book_via_search_non_gds_field_10"],
            ]
        ],

        "cb-request" => [
            "enabled"       => true,
            "template_name" => "cb_request",
            "language"      => "en_GB",
            "fields" => [
                "field_1"  => ["var" => "wa_p_name", "sanitize" => "cb_request_field_1"],
                "field_2"  => ["var" => "wa_submitted_at", "sanitize" => "cb_request_field_2"],
                "field_3"  => ["var" => "wa_email", "sanitize" => "cb_request_field_4"],
                "field_4"  => ["var" => "wa_phone", "sanitize" => "cb_request_field_5"],
                "field_5"  => ["var" => "wa_departure", "sanitize" => "cb_request_field_6"],
                "field_6"  => ["var" => "wa_arrival", "sanitize" => "cb_request_field_7"],
                "field_7"  => ["var" => "wa_departure_date", "sanitize" => "cb_request_field_8"],
            ]
        ],

        "contact-us" => [
            "enabled"       => false,
            "template_name" => "contact_us",
            "language"      => "en_GB",
            "fields" => [
                "field_1" => ["var" => "wa_p_name", "sanitize" => "contact_us_field_1"],
                "field_2" => ["var" => "wa_submitted_at", "sanitize" => "contact_us_field_2"],
                "field_4" => ["var" => "wa_email", "sanitize" => "contact_us_field_4"],
                "field_5" => ["var" => "wa_phone", "sanitize" => "contact_us_field_5"],
            ]
        ],

        "gds-no-flight" => [
            "enabled"       => false,
            "template_name" => "gds_no_flight",
            "language"      => "en_GB",
            "fields" => [
                "field_1"  => ["var" => "wa_p_name", "sanitize" => "gds_no_flight_field_1"],
                "field_2"  => ["var" => "wa_submitted_at", "sanitize" => "gds_no_flight_field_2"],
                "field_3"  => ["var" => "wa_airfare", "sanitize" => "gds_no_flight_field_3"],
                "field_4"  => ["var" => "wa_email", "sanitize" => "gds_no_flight_field_4"],
                "field_5"  => ["var" => "wa_phone", "sanitize" => "gds_no_flight_field_5"],
                "field_6"  => ["var" => "wa_departure", "sanitize" => "gds_no_flight_field_6"],
                "field_7"  => ["var" => "wa_arrival", "sanitize" => "gds_no_flight_field_7"],
                "field_8"  => ["var" => "wa_departure_date", "sanitize" => "gds_no_flight_field_8"],
                "field_9"  => ["var" => "wa_arrival_date", "sanitize" => "gds_no_flight_field_9"],
                "field_10" => ["var" => "wa_extra_flight_details", "sanitize" => "gds_no_flight_field_10"],
            ]
        ],

        "lp-cb-request-sidebar" => [
            "enabled"       => false,
            "template_name" => "lp_cb_request_sidebar",
            "language"      => "en_GB",
            "fields" => [
                "field_1" => ["var" => "wa_p_name", "sanitize" => "lp_cb_request_sidebar_field_1"],
                "field_2" => ["var" => "wa_submitted_at", "sanitize" => "lp_cb_request_sidebar_field_2"],
                "field_3" => ["var" => "wa_airfare", "sanitize" => "lp_cb_request_sidebar_field_3"],
                "field_4" => ["var" => "wa_email", "sanitize" => "lp_cb_request_sidebar_field_4"],
                "field_5" => ["var" => "wa_phone", "sanitize" => "lp_cb_request_sidebar_field_5"],
                "field_6" => ["var" => "wa_departure", "sanitize" => "lp_cb_request_sidebar_field_6"],
                "field_7" => ["var" => "wa_arrival", "sanitize" => "lp_cb_request_sidebar_field_7"],
                "field_8" => ["var" => "wa_departure_date", "sanitize" => "lp_cb_request_sidebar_field_8"],
                "field_9" => ["var" => "wa_arrival_date", "sanitize" => "lp_cb_request_sidebar_field_9"],
            ]
        ],

        "lp-cb-request" => [
            "enabled"       => false,
            "template_name" => "lp_cb_request",
            "language"      => "en_GB",
            "fields" => [
                "field_1" => ["var" => "wa_p_name", "sanitize" => "lp_cb_request_field_1"],
                "field_2" => ["var" => "wa_submitted_at", "sanitize" => "lp_cb_request_field_2"],
                "field_3" => ["var" => "wa_airfare", "sanitize" => "lp_cb_request_field_3"],
                "field_4" => ["var" => "wa_email", "sanitize" => "lp_cb_request_field_4"],
                "field_5" => ["var" => "wa_phone", "sanitize" => "lp_cb_request_field_5"],
                "field_6" => ["var" => "wa_departure", "sanitize" => "lp_cb_request_field_6"],
                "field_7" => ["var" => "wa_arrival", "sanitize" => "lp_cb_request_field_7"],
                "field_8" => ["var" => "wa_departure_date", "sanitize" => "lp_cb_request_field_8"],
                "field_9" => ["var" => "wa_arrival_date", "sanitize" => "lp_cb_request_field_9"],
            ]
        ],

    ],
];
