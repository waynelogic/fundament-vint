<?php namespace App\Models;

use Waynelogic\FilamentCms\Models\SettingModel;

class SiteSettings extends SettingModel
{
    public string $settingsCode = 'site_settings';

    public string $title = 'Site Settings';

    public string $description = 'Site Settings';

    public string $icon = 'heroicon-o-cog';
}
