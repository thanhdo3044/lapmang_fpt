<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class baiviet extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_dia_chi',
        'title',
        'slug',
        'description',
        'keywords',
        'meta_description',
        'meta_title',
    ];
    public function tinhthanh() {
        return $this->belongsTo(tinhthanh::class, 'id_dia_chi','id');
    }
    public function khuvuc() {
        return $this->belongsTo(khuvuc::class, 'id_dia_chi', 'id');
    }
}
