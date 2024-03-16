<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tinhthanh extends Model
{
    use HasFactory;
    protected $fillable = [
        'ten_thanh_pho',
        'slug',
        'id_khu_vuc'
    ];

    public function khuvuc() {
        return $this->belongsTo(khuvuc::class, 'id_khu_vuc', 'id');
    }
    public function baiviet() {
        return $this->hasMany(baiviet::class, 'id_dia_chi');
    }
}
