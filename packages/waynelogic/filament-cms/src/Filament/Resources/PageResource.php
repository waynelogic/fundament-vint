<?php namespace Waynelogic\FilamentCms\Filament\Resources;

use Waynelogic\FilamentCms\Filament\Resources\PageResource\Pages;
use Waynelogic\FilamentCms\Filament\Resources\PageResource\RelationManagers;
use Waynelogic\FilamentCms\Models\Page;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

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

                Tables\Columns\TextColumn::make('title')
                    ->label('Название'),

//                Tables\Columns\TextColumn::make('slug')
//                    ->label('SLUG'),

                Tables\Columns\TextColumn::make('template')
                    ->label('Шаблон'),

                Tables\Columns\TextColumn::make('url')
                    ->url(fn ($record) => url($record->url), true)
                    ->icon('heroicon-o-link')
                    ->label('Ссылка'),

                Tables\Columns\ToggleColumn::make('active')
                    ->label('Активна'),
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
