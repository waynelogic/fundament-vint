<?php namespace Waynelogic\FilamentCms\Filament\Resources\PageResource\Pages;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;
use Waynelogic\FilamentCms\Filament\Resources\PageResource;
use Waynelogic\FilamentCms\Models\Page;
use Waynelogic\FilamentCms\Templates\TemplateManager;

class CreatePage extends CreateRecord
{
    protected static string $resource = PageResource::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Section::make('Настроки страницы')->schema([

                    Forms\Components\TextInput::make('title')
                        ->label('Название')
                        ->required()
                        ->live(onBlur: true)
                        ->afterStateUpdated(function (string $operation, $state, Forms\Set $set) {
                            $set('slug', Str::slug($state));
                        }),

                    Forms\Components\TextInput::make('slug')
                        ->dehydrated()
                        ->required()
                        ->unique(Page::class, 'slug', ignoreRecord: true),

                    Forms\Components\Select::make('author_id')
                        ->relationship(name: 'parent', titleAttribute: 'title'),

//                    Forms\Components\Select::make('parent_id')
//                        ->label('Parent')
//                        ->native(true)
//                        ->relationship('parent', 'title', fn (Builder $query) => $query->where('parent_id', null))
//                        ->placeholder('Select parent category'),


                    Forms\Components\Select::make('template')
                        ->label('Шаблон')
                        ->options(TemplateManager::getList())
                        ->default('main')
                        ->live(),

                ])->collapsible()->columns(2),

            ]);
    }
}
