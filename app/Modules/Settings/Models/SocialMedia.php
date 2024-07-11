<?php

namespace App\Modules\Settings\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;

    protected $table = 'social_media';

    protected $fillable = [
        'facebook',
        'twitter',
        'linkedin',
        'google',
        'printerest',
        'youtube',
        'instagram',
        'tumblr',
        'flickr',
        'reddit',
        'snapchat',
        'whatsapp',
        'quora',
        'stumbleupon',
        'delicious',
        'digg'
    ];

}
