<?php

namespace Waynelogic\FilamentCms\Filament\Resources\SettingsResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Waynelogic\FilamentCms\Filament\Resources\SettingsResource;

class EditSettings extends EditRecord
{
    protected static string $resource = SettingsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
