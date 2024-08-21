<?php

namespace Astrogoat\Goaffpro\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;

class GoaffproSettings extends AppSettings
{
    public string $key;

    public function rules(): array
    {
        return [
            'key' => Rule::requiredIf($this->enabled === true),
        ];
    }

    public function description(): string
    {
        return 'Goaffpro is a platform that connects merchants and affiliates for online sales and commissions. It offers features such as affiliate tracking, payouts, analytics, multi level marketing and custom branding.';
    }

    public static function group(): string
    {
        return 'goaffpro';
    }
}
