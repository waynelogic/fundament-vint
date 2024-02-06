<?php namespace Waynelogic\FilamentCms;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Waynelogic\FilamentCms\View\Components\Meta;

class FilamentCmsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->registerPublishables();
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'cms');

        Blade::component('meta', Meta::class);
    }

    /**
     * Migrations
     *
     * php artisan vendor:publish --provider="Waynelogic\FilamentCms\FilamentCmsServiceProvider" --tag="migrations"
     */
    private function registerPublishables(): void
    {
        $arTables = [
            'create_pages_table.php',
        ];

        if (! $this->app->runningInConsole()) {
            return;
        }

        foreach ($arTables as $table) {
            if (empty(glob(database_path('migrations/*_' . $table)))) {
                $this->publishes([
                    __DIR__.'/../database/migrations/' . $table => database_path('migrations/'.date('Y_m_d_His', time()).'_' . $table),
                ], 'migrations');
                sleep(1);
            }
        }
    }
}
