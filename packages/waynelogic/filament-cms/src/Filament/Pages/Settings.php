<?php namespace Waynelogic\FilamentCms\Filament\Pages;

use App\Models\SiteSettings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Actions;

class Settings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.settings';

    protected static ?string $title = 'Настройки';

//    protected function getHeaderActions(): array
//    {
//        return [
//            Actions\DeleteAction::make()
//        ];
//    }
    public function mount(): void
    {
        $s =  SiteSettings::instance();
    }

    protected function fillForm(): void
    {

    }

    public function getSettingsLayout () {
        $s = SiteSettings::instance();
        dd($s->color);
    }
}
