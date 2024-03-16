<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class khuvuc extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'ten_khu_vuc'
    ];
    public function tinhthanh() {
        return $this->hasMany(tinhthanh::class, 'id_khu_vuc');
    }
    public function baiviet() {
        return $this->hasMany(baiviet::class, 'id_dia_chi');
    }
}
