<?php

namespace App\Modules\Client\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    
    protected $table = 'client';

    protected $fillable = [
        'name',
        'url',
        'photo'
    ];
}
