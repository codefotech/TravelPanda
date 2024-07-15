<?php

namespace App\Modules\FAQ\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    use HasFactory;
            
    protected $table = 'faq';

    protected $fillable = [
        'faq_title',
        'faq_content'
    ];
}
