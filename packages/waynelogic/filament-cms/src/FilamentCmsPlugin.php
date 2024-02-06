<?php namespace Waynelogic\FilamentCms;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Waynelogic\FilamentCms\Filament\Resources;
use Waynelogic\FilamentCms\Filament\Pages;

class FilamentCmsPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-cms';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->resources([
                Resources\PageResource::class,
//                Resources\SettingsResource::class
            ])
            ->pages([
                Pages\Settings::class
            ]);
    }

    public function boot(Panel $panel): void
    {

    }
}
