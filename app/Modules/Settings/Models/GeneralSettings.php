<?php

namespace App\Modules\Settings\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSettings extends Model
{
    use HasFactory;

    protected $table = 'general_settings';

    protected $fillable = [
        'logo', // image path
        'favicon', // image path
        'email',
        'phone',
        'address',
        'copyright_text',
        'social_icon',
        'social_icon_url',
        'stunning_place',
        'satisfied_customer',
        'travel_places',
        'banner', // image path
    ];
}
