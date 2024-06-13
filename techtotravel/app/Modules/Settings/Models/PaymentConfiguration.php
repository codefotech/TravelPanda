<?php

namespace App\Modules\Settings\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentConfiguration extends Model
{
    use HasFactory;

    protected $table = 'payment_configuration';

    protected $fillable = [
        'payment_email',
        'stripe_public_key',
        'stripe_secret_key',
        'bank_details',
    ];
}
