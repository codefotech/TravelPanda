<?php

namespace App\Modules\Settings\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    use HasFactory;

    protected $table = 'home_page';

    protected $fillable = [
        'user_types',
        'title',
        'subtitle',
        'description',
        'content_data',
//        'order',
    ];
}
