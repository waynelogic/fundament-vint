<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class  Header extends Component
{
    public $headerNavbar;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->headerNavbar = $this->headerNavbar();
    }

    private function headerNavbar() : array
    {
        return [
            (object) [
                'title' => 'Главная',
                'url' => '/'
            ],
            (object) [
                'title' => 'Услуги',
                'url' => '/'
            ],
            (object) [
                'title' => 'Наша техника',
                'url' => '/'
            ],
            (object) [
                'title' => 'Прайс',
                'url' => '/'
            ],
            (object) [
                'title' => 'Наши работы',
                'url' => '/'
            ],
            (object) [
                'title' => 'Контакты',
                'url' => '/'
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}
