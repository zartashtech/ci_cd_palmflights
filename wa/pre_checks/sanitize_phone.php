<?php
/**
 * sanitize_phone.php
 * ------------------
 * Cleans raw input (spaces, dashes, brackets).
 * Handles +, 00, leading 0 with fallback dial code.
 * Returns digits only (no +).
 */

if (!function_exists('sanitize_phone')) {
    function sanitize_phone($value, $fallbackDialCode = "44") {
        $value = trim((string)$value);
        $value = strip_tags($value);

        // Remove spaces, dashes, parentheses
        $value = preg_replace("/[\s\-\(\)]/", "", $value);

        // Case: starts with 00 → make it +
        if (strpos($value, "00") === 0) {
            $value = "+" . substr($value, 2);
        }

        // Case: starts with 0 → prepend fallbackDialCode
        if ($value !== "" && $value[0] === "0") {
            $value = "+" . $fallbackDialCode . substr($value, 1);
        }

        // Case: doesn’t start with + or digits → prepend +
        if ($value !== "" && $value[0] !== "+") {
            $value = "+" . $value;
        }

        // Final: remove +, keep max 15 digits
        $value = preg_replace("/^\+(\d{1,15}).*$/", "$1", $value);

        return $value;
    }
}
