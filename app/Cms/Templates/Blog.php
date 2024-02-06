<?php namespace App\Cms\Templates;

use Filament\Forms;
use Waynelogic\FilamentCms\Templates\AbstractTemplate;

class Blog extends AbstractTemplate
{
    public string $name = 'Блог';

    public string $view = 'blog';

    public function getFormSchema() : array
    {
        return [
            Forms\Components\TextInput::make('hero_title')->label('Заголовок Hero'),
            Forms\Components\Textarea::make('hero_text')->label('Текст Hero'),
        ];
    }

    public function onLol() {
        return response()->json([
            'name' => 'Vasya',
            'state' => 'RUSSLAND',
        ]);
    }
}
