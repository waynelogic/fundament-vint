<?php

namespace Waynelogic\FilamentCms\Filament\Resources;

use App\Filament\Resources\SettingsResource\Pages;
use App\Filament\Resources\SettingsResource\RelationManagers;
use App\Models\Settings;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Waynelogic\FilamentCms\Models\SettingModel;

class SettingsResource extends Resource
{
    protected static ?string $model = SettingModel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => \Waynelogic\FilamentCms\Filament\Resources\SettingsResource\Pages\ListSettings::route('/'),
            'create' => \Waynelogic\FilamentCms\Filament\Resources\SettingsResource\Pages\CreateSettings::route('/create'),
            'edit' => \Waynelogic\FilamentCms\Filament\Resources\SettingsResource\Pages\EditSettings::route('/{record}/edit'),
        ];
    }
}
