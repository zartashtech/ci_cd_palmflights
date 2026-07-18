<?php
/**
 * Validate phone number for WhatsApp
 * Ensures E.164 format (8–15 digits)
 */

function validate_phone_number($number)
{
    // Strip non-digits
    $clean = preg_replace('/\D+/', '', $number);

    // WhatsApp expects full intl format (e.g., 923001234567)
    if (preg_match('/^[1-9][0-9]{7,14}$/', $clean)) {
        return $clean;
    }

    return false;
}
