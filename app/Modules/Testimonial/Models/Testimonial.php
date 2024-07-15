<?php

namespace App\Modules\Testimonial\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $table = 'testimonial';

    protected $fillable = [
        'name',
        'designation',
        'comment',
        'photo'
    ];
}
