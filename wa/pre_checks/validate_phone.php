<?php
/**
 * validate_phone.php
 * ------------------
 * Normalizes & validates phone numbers (UK-first).
 *
 * Rules:
 * - If 10-digit starting with 7 OR 11-digit starting with 07 → assume UK mobile (prepend 44).
 * - If 10–11 digits but not UK mobile → apply fallbackDialCode (IP-based).
 * - If number already includes +XX / 00XX / direct XX… → trust as international.
 * - Enforce 10–15 digits total.
 */

if (!function_exists('validate_phone')) {
    function validate_phone($rawPhone, $fallbackDialCode = "44") {
        $clean = preg_replace("/\D+/", "", (string)$rawPhone); // just digits
        $len   = strlen($clean);

        // === Case A: UK Mobiles ===
        if ($len === 10 && $clean[0] === "7") {
            return "44" . $clean; // 7939... → 447939...
        }
        if ($len === 11 && substr($clean, 0, 2) === "07") {
            return "44" . substr($clean, 1); // 07939... → 447939...
        }

        // === Case B: Local 10–11 digit but not UK mobile ===
        if ($len === 10 || $len === 11) {
            return $fallbackDialCode . ltrim($clean, "0");
        }

        // === Case C: Numbers with explicit dial code (sanitize will handle) ===
        $phone = sanitize_phone($rawPhone, $fallbackDialCode);

        // Must be all digits
        if (!ctype_digit($phone)) {
            return false;
        }

        $len = strlen($phone);
        if ($len < 10 || $len > 15) {
            return false;
        }

        return $phone; // ✅ final normalized
    }
}
