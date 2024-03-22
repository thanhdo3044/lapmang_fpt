<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class BlogMB extends Model
{
    use HasFactory,
    HasSlug;
protected $fillable = [
    'id_dia_chi',
    'title',
    'slug',
    'description',
    'keywords',
    'meta_description',
    'meta_title',
];

public function getSlugOptions(): SlugOptions
{
    return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');   
}
public function getRouteKeyName()
{
    return 'slug';
}
public function tinhthanh() {
    return $this->belongsTo(tinhthanh::class, 'id_dia_chi','id');
}
public function khuvuc() {
    return $this->belongsTo(khuvuc::class, 'id_dia_chi', 'id');
}
}
