<?php namespace Waynelogic\FilamentCms\Filament\Resources\PageResource\Pages;

use Filament\Actions;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use Waynelogic\FilamentCms\Filament\Resources\PageResource;
use Waynelogic\FilamentCms\Models\Page;
use Waynelogic\FilamentCms\Templates\TemplateManager;

class EditPage extends EditRecord
{
    protected static string $resource = PageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\Action::make('view')
                ->label('Просмотреть')
                ->color('success')
                ->icon('heroicon-o-eye')
                ->url(url($this->record->url), true)
        ];
    }

    public function form(Form $form): Form
    {

        return $form->schema([

            Forms\Components\Group::make()->schema([

                Forms\Components\Section::make('Главное')->schema([

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

//                    Forms\Components\Select::make('parent_id')
//                        ->native()
//                        ->label('Родитель')
//                        ->relationship('parent', 'title', fn (Builder $query) => $query->where('parent_id', null))
//                        ->searchable()
//                        ->placeholder('Нет родительской страницы'),

                    Forms\Components\Select::make('author_id')
                        ->relationship(name: 'parent', titleAttribute: 'title'),

                    Forms\Components\Select::make('template')
                        ->label('Шаблон')
                        ->options(TemplateManager::getList())
                        ->default('main')
                        ->live(),

                ])->columns(2),

                Forms\Components\Group::make(function (Forms\Get $get) {

                    $template = TemplateManager::getTemplate($get('template'));
                    return $template->getFormSchema();

                })->statePath('content')->columnSpan('full'),

            ])->columnSpan(2),

            Forms\Components\Section::make('Мета')->schema([

                Forms\Components\TextInput::make('meta_title')->label('Мета заголовок'),

                Forms\Components\Textarea::make('meta_description')->label('Мета описание'),

            ])->columnSpan(1),

        ])->columns(3);
    }

//    protected ?string $maxContentWidth = 'full';
}
