<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class TinTucNew extends Model
{
    use HasFactory,
        HasSlug;
    protected $fillable = [
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
    protected $dispatchesEvents = [
        'creating' => YourModelCreating::class,
        'updating' => YourModelUpdating::class,
    ];
}

class YourModelCreating
{
    public function __invoke($model)
    {
        $model->created_at = Carbon::now()->addHours(7); // Cộng 7 giờ vào thời gian hiện tại
        $model->updated_at = $model->created_at;
    }
}

class YourModelUpdating
{
    public function __invoke($model)
    {
        $model->updated_at = Carbon::now()->addHours(7); // Cộng 7 giờ vào thời gian hiện tại
    }
}

