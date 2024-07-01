<?php

namespace App\Modules\Destination\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $table = 'destination';

    protected $fillable = [
        'destination_name',
        'heading',
        'short_description',
        'package_heading',
        'package_subheading',
        'detail_heading',
        'detail_subheading',
        'introduction',
        'experience',
        'weather',
        'hotel',
        'transportation',
        'culture',
        'featured_photo',
        'banner',
    ];
}
//Destination Name
//Heading
//Short Description
//Package Heading
//Package Subheading
//Detail Heading
//Detail Subheading
//Introduction
//Experience
//Weather
//Hotel
//Transportation
//Culture
//Featured Photo
//Banner
