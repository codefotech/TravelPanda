<?php

namespace App\Modules\TeamMember\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model {
    use HasFactory;

    protected $table = 'team_member';

    protected $fillable = [
        'member_name',
        'designation',
        'details',
        'facebook',
        'instagram',
        'twitter',
        'linkedin',
        'youtube',
        'google',
        'flickr',
        'phone',
        'email',
        'website',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'photo',
        'banner'
    ];
}
