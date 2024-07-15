<?php

namespace App\Modules\Payment\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
        
    protected $table = 'payment';

    protected $fillable = [
        'payment_date',
        'package',
        'destination',
        'payment_method',
        'payment_status'
    ];
}
