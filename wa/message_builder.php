<?php
/**
 * MessageBuilder
 * --------------
 * Builds WhatsApp template payloads dynamically based on config.php
 * and variables.php. Supports per-form field mapping and sanitizers.
 */

require_once __DIR__ . "/sanitizers.php";

class MessageBuilder
{
    protected $config;
    protected $variables;

    public function __construct(array $config, array $variables)
    {
        $this->config    = $config;
        $this->variables = $variables;
    }

    /**
     * Build template payload for a given form/template.
     *
     * @param string $formName  The form name (must exist in config.php → forms[])
     * @param string $to        Recipient phone number
     * @return array|null       Payload array or null if form disabled
     */
    public function buildTemplatePayload($formName, $to)
    {
        if (empty($this->config['forms'][$formName])) {
            throw new Exception("Form '{$formName}' not defined in config.php");
        }

        $formConfig = $this->config['forms'][$formName];

        // 🚫 Skip silently if disabled
        if (empty($formConfig['enabled']) || $formConfig['enabled'] !== true) {
            return null;
        }

        // Template language (per-form > global fallback)
        $language = $formConfig['language'] ?? $this->config['language'] ?? 'en_GB';

        // Base payload
        $payload = [
            "phone_number"      => $to,
            "template_name"     => $formConfig['template_name'],
            "template_language" => $language,
        ];

        // Add mapped fields
        if (!empty($formConfig['fields']) && is_array($formConfig['fields'])) {
            foreach ($formConfig['fields'] as $fieldKey => $meta) {
                $varName   = $meta['var'] ?? null;
                $sanitizer = $meta['sanitize'] ?? null;

                $rawValue  = $varName && isset($this->variables[$varName])
                    ? $this->variables[$varName]
                    : '';

                // Apply sanitizer if defined
                if ($sanitizer && function_exists($sanitizer)) {
                    $value = call_user_func($sanitizer, $rawValue);
                } else {
                    // fallback → passthrough
                    $value = passthrough($rawValue);
                }

                $payload[$fieldKey] = $value;
            }
        }

        // Add contact block (optional but good for WA APIs)
        $payload['contact'] = [
            "first_name"    => $this->variables['wa_p_name']   ?? '',
            "last_name"     => "User",
            "email"         => $this->variables['wa_email']    ?? '',
            "country"       => "Pakistan", // could later be geo-IP
            "language_code" => substr($language, 0, 2), // e.g. "en"
        ];

        return $payload;
    }
}
