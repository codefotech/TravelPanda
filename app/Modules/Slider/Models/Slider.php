<?php

namespace App\Modules\Slider\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $table = 'slider';

    protected $fillable = [
        'heading',
        'content',
        'button_text',
        'button_url',
        'photo'
    ];
}
