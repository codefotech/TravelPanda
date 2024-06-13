<?php

namespace App\Modules\Settings\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaptchaConfiguration extends Model
{
    use HasFactory;

    protected $table = 'captcha_configuration';

    protected $fillable = [
        'recaptcha_site_key',
        'recaptcha_status',
    ];
}
