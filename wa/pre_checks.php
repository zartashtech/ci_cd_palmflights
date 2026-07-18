<?php
/**
 * pre_checks.php
 * ----------------
 * Dynamically loads and runs all enabled pre-checks.
 */

function runPreChecks($phone, $formName, $variables, $preCheckFlags = []) {
    $isValid = true;

    foreach ($preCheckFlags as $check => $enabled) {
        if (!$enabled || !$isValid) continue;

        $file = __DIR__ . "/pre_checks/{$check}.php";
        if (file_exists($file)) {
            require_once $file;

            // Expect function to match file name: e.g. validate_phone()
            if (function_exists($check)) {
                $result = $check($phone, $formName, $variables);

                // If function explicitly returns false → stop further checks
                if ($result === false) {
                    $isValid = false;
                }
                // If sanitizer returns string (like new phone) → replace $phone
                elseif (is_string($result)) {
                    $phone = $result;
                }
            }
        }
    }

    return [$isValid, $phone];
}
