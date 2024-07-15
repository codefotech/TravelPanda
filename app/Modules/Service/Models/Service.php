<?php

namespace App\Modules\Service\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
        
    protected $table = 'service';

    protected $fillable = [
        'name',
        'short_description',
        'description',
        'icon',
        'photo',
        'banner',
        'meta_title',
        'meta_keywords',
        'meta_description'
    ];
}
