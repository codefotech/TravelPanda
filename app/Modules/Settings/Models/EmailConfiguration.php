<?php

namespace App\Modules\Settings\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailConfiguration extends Model
{
    use HasFactory;

    protected $table = 'email_configuration';

    protected $fillable = [
        'send_email',
        'receive_email',
        'smtp_host',
        'smtp_port',
        'smtp_user',
        'smtp_password',
    ];

}
