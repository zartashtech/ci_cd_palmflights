<?php
/**
 * validators.php
 * --------------
 * Validation logic for WhatsApp fields.
 */

function validate_phone($phone) {
    if (empty($phone)) return false;

    // Must start with +
    if ($phone[0] !== '+') return false;

    $digits = substr($phone, 1);

    // Only digits allowed after +
    if (!ctype_digit($digits)) return false;

    // Length must be 10–15
    $len = strlen($digits);
    return ($len >= 10 && $len <= 15);
}
