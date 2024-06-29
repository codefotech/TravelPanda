<?php

namespace App\Modules\Traveller\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traveller extends Model
{
    use HasFactory;

    protected $table = 'traveller';

    protected $fillable = [
        'traveller_name',
        'traveller_email',
        'traveller_phone',
        'city',
        'state',
        'country',
        'address',
        'status',
    ];
}
