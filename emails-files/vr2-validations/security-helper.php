<?php
/**
 * Security & Anti-Dummy Lead Validation Helper
 * Palm Flights Protection Module
 */

if (!defined('PF_FORM_SECURE')) {
    define('PF_FORM_SECURE', true);
}

/**
 * Check if the current request is a direct HTTP access to an internal script
 */
function pf_prevent_direct_access() {
    $script = basename($_SERVER['SCRIPT_NAME'] ?? '');
    $current = basename(__FILE__);
    if ($script === $current || (isset($_SERVER['PHP_SELF']) && basename($_SERVER['PHP_SELF']) === $current)) {
        http_response_code(403);
        exit('Access Denied');
    }
}

/**
 * Sanitize input string safely
 */
function pf_clean_input($data) {
    if ($data === null) return '';
    $data = trim((string)$data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

/**
 * Check honeypot field (anti-bot trap)
 * Returns true if bot is detected (honeypot filled), false if clean
 */
function pf_is_bot_honeypot() {
    if (!empty($_POST['form_website_hp']) || !empty($_POST['form_b_verify'])) {
        return true;
    }
    return false;
}

/**
 * Check submission speed (anti-bot speed check)
 * Bots submit forms instantly (< 2.5 seconds)
 * Returns true if submission is unnaturally fast
 */
function pf_is_bot_timing() {
    if (isset($_POST['pf_ts']) && is_numeric($_POST['pf_ts'])) {
        $elapsed = time() - (int)$_POST['pf_ts'];
        // Submitted in less than 2 seconds = automated bot
        if ($elapsed < 2) {
            return true;
        }
        // Submitted after 48 hours = expired
        if ($elapsed > 172800) {
            return true;
        }
    }
    return false;
}

/**
 * Validate customer name against dummy data, bot spam, and invalid formats
 * Returns null if valid, or an error string if invalid
 */
function pf_validate_name($name) {
    $name = trim((string)$name);
    if (empty($name)) {
        return 'Please enter your name.';
    }

    if (mb_strlen($name) < 2 || mb_strlen($name) > 60) {
        return 'Name must be between 2 and 60 characters.';
    }

    // Check for URLs or web links
    if (preg_match('/(https?:\/\/|www\.|ftp:\/\/|\.com|\.net|\.org|\.ru|\.xyz|\.top|\.cn|\.info|\.biz)/i', $name)) {
        return 'Name contains invalid characters or links.';
    }

    // Check for HTML/Script tags or brackets
    if (preg_match('/[<>{}\[\]\\\\]/', $name)) {
        return 'Name contains invalid characters.';
    }

    // Check for spam marketing keywords
    $spamWords = [
        'seo', 'crypto', 'bitcoin', 'casino', 'viagra', 'cialis', 'porn', 'whatsapp', 'telegram',
        'investment', 'forex', 'loan', 'marketing', 'backlink', 'ranking', 'promotion', 'http',
        'money', 'hack', 'crack', 'drug', 'cannabis', 'pills'
    ];
    foreach ($spamWords as $word) {
        if (preg_match('/\b' . preg_quote($word, '/') . '\b/i', $name)) {
            return 'Invalid name provided.';
        }
    }

    // Check for common gibberish names
    $dummyNames = [
        'asdf', 'qwerty', 'fake name', 'no name'
    ];
    $cleanLower = strtolower(preg_replace('/\s+/', ' ', $name));
    if (in_array($cleanLower, $dummyNames, true)) {
        return 'Please enter your genuine full name.';
    }

    // If name is single word gibberish
    if (preg_match('/^(asdf|asdfgh|qwerty|xxx)$/i', $cleanLower)) {
        return 'Please enter your genuine full name.';
    }

    return null;
}

/**
 * Validate phone number strictly (anti-dummy lead)
 * Returns null if valid, or an error string if invalid
 */
function pf_validate_phone($phone) {
    $phone = trim((string)$phone);
    if (empty($phone)) {
        return 'Please enter your phone number.';
    }

    // Extract digits only
    $digits = preg_replace('/\D+/', '', $phone);
    $len = strlen($digits);

    // Standard international / UK phone length is between 8 and 15 digits
    if ($len < 8 || $len > 16) {
        return 'Please enter a valid phone number (8 to 15 digits).';
    }

    // Check for repeating identical digits (e.g., 00000000, 11111111, 99999999)
    if (preg_match('/^(\d)\1+$/', $digits)) {
        return 'Please enter a genuine phone number.';
    }

    // Check for sequential fake numbers
    $fakeSequences = [
        '12345678', '123456789', '1234567890', '0123456789', '987654321', '9876543210',
        '0000000000', '1111111111', '2222222222', '3333333333', '4444444444',
        '5555555555', '6666666666', '7777777777', '8888888888', '9999999999'
    ];
    foreach ($fakeSequences as $seq) {
        if (strpos($digits, $seq) !== false) {
            return 'Please enter a genuine phone number.';
        }
    }

    // Minimum 3 unique digits required (avoids 12121212, 01010101)
    $uniqueCount = count(count_chars($digits, 1));
    if ($uniqueCount < 3) {
        return 'Please enter a valid phone number.';
    }

    // Must not contain letters or suspicious symbols
    if (preg_match('/[a-zA-Z]/', $phone)) {
        return 'Phone number cannot contain letters.';
    }

    return null;
}

/**
 * Validate email address strictly (anti-dummy lead)
 * Returns null if valid, or an error string if invalid
 */
function pf_validate_email($email) {
    $email = trim((string)$email);
    if (empty($email)) {
        return 'Please enter your email address.';
    }

    if (strlen($email) > 80) {
        return 'Email address is too long.';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return 'Please enter a valid email address.';
    }

    // Extract domain part
    $parts = explode('@', $email);
    if (count($parts) !== 2) {
        return 'Invalid email format.';
    }
    $domain = strtolower($parts[1]);

    // Check domain has valid dot and extension
    if (strpos($domain, '.') === false) {
        return 'Email must have a valid domain.';
    }

    $tld = substr(strrchr($domain, '.'), 1);
    if (strlen($tld) < 2) {
        return 'Invalid email domain extension.';
    }

    // Block obvious placeholder / invalid emails
    $dummyEmails = [
        'mail@mail.com', 'none@none.com', 'aaa@aaa.com', 'abc@abc.com'
    ];
    if (in_array(strtolower($email), $dummyEmails, true)) {
        return 'Please provide a genuine email address.';
    }

    // Block disposable / throwaway email domains
    $disposableDomains = [
        'tempmail.com', 'throwawaymail.com', 'mailinator.com', 'guerrillamail.com',
        '10minutemail.com', 'yopmail.com', 'sharklasers.com', 'trashmail.com',
        'temp-mail.org', 'dispostable.com', 'fakeinbox.com', 'getairmail.com'
    ];
    if (in_array($domain, $disposableDomains, true)) {
        return 'Temporary / disposable emails are not permitted.';
    }

    return null;
}
