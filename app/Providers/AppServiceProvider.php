<?php

namespace App\Providers;

use App\Models\Marquee;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        view()->composer('template.nguoi_dung', function ($view) {
            $marquee = Marquee::all(); // Lấy dữ liệu từ model
            $view->with('marquee', $marquee);
        });
    }
}
