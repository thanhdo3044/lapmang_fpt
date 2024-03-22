<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dangkidv extends Model
{
    use HasFactory;
    protected $fillable = [
        'ten',
        'phone',
        'diachi',
        'dichvu',
        'datenow',
    ];
}
