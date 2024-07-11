<?php

namespace App\Modules\Package\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model {
    use HasFactory;

    protected $table = 'package';

    protected $fillable = array(
        'package_name',
        'destination_name',
        'description',
        'short_description',
        'location',
        'tour_start_date',
        'tour_end_date',
        'last_booking_date',
        'map',
        'itinerary',
        'price',
        'policy',
        'terms_and_conditions',
        'featured',
        'photo',
        'banner',
        'tour_photos',
        'tour_videos',
    );
}

//Package Name
//Destination Name
//Description
//Short Description
//Location
//Tour Start Date
//Tour End Date
//Last Booking Date
//Map
//Itinerary
//Price (per person)
//Policy
//Terms and Conditions
//Is Featured?
//Featured Photo
//Banner
//Tour Photos
//Tour Videos
