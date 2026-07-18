<?php
/**
 * ip2country.php
 * --------------
 * Detects user country & dial code from IP.
 * Uses pre_checks/country_codes.php
 */

function detect_country_from_ip($ip = null) {
    if ($ip === null) {
        $ip = $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';
    }

    $codes = include __DIR__ . "/country_codes.php";

    $default = [
        "country"   => "United Kingdom",
        "iso_code"  => "GB",
        "dial_code" => "44"
    ];

    // 🟢 For now: always fallback UK unless you integrate GeoIP
    if (preg_match('/^(127\.|10\.|192\.168\.)/', $ip)) {
        return $default;
    }

    // Example placeholder: Pakistan if IP ends with .pk
    if (strpos(gethostbyaddr($ip), ".pk") !== false) {
        return $codes["PK"];
    }

    return $default;
}
