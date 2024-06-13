<?php

namespace App\Modules\Settings\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    protected $table = 'general_settings';

    protected $fillable = [
        'logo',
        'favicon',
        'email',
        'phone',
        'address',
        'copyright_text',
        'social_icon',
        'social_icon_url',
        'banner',
    ];
}
