<?php

namespace App\Providers;

use App\View\Components\Header;
use App\View\Components\Heading;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;


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
        Blade::component('header', Header::class);
        Blade::component('heading', Heading::class);
    }
}
