<?php namespace App\Cms\Templates;

use Filament\Forms;
use Waynelogic\FilamentCms\Templates\AbstractTemplate;

class Home extends AbstractTemplate
{
    public string $name = 'Главная';

    public string $view = 'home';

    public function getFormSchema() : array
    {
        return [
            Forms\Components\Section::make('Hero')->schema([
                Forms\Components\TextInput::make('hero_title')->label('Заголовок Hero'),
                Forms\Components\Textarea::make('hero_text')->label('Текст Hero')->rows(5),
            ]),


            Forms\Components\Section::make('Виды свай')->schema([
                Forms\Components\Repeater::make('members')->schema([

                    Forms\Components\TextInput::make('name')->required(),
                    Forms\Components\RichEditor::make('name')->required(),
                    Forms\Components\FileUpload::make('image')
                ])->columns(2)->label('Сваи'),
            ]),

            Forms\Components\Section::make('About')->schema([
                Forms\Components\Repeater::make('members')->schema([

                    Forms\Components\TextInput::make('name')->required(),
                    Forms\Components\Select::make('role')
                        ->options([
                            'member' => 'Member',
                            'administrator' => 'Administrator',
                            'owner' => 'Owner',
                        ])
                        ->required(),
                    Forms\Components\FileUpload::make('image')
                ])->columns(2),


                Forms\Components\Repeater::make('why_us')->schema([

                    Forms\Components\TextInput::make('title')->required(),
                    Forms\Components\FileUpload::make('image')->required(),
                ])->columns(2)->label('Почему мы?')->minItems(4),
            ])
        ];
    }

    public function onGetData() {

        return response()->json([
            'name' => 'SASHA',
            'state' => 'LOL',
        ]);
    }

    public function onLol() {
        return response()->json([
            'name' => 'Vasya',
            'state' => 'RUSSLAND',
        ]);
    }
}
