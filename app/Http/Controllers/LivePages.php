<?php

namespace App\Http\Controllers;

use Livewire\Component;
use Waynelogic\FilamentCms\Models\Page;

class LivePages extends Component
{
    public Page $page;

    public object $content;

    public function render()
    {
        $url = request()->path();
        if ($url === ' ' or $url === '') {
            $url = '/';
        }

        $page = Page::where('url', $url)->first();
        if (!$page or empty($page->view)) {
            abort(404);
        }

        $this->page = $page;
        $this->content = json_decode(json_encode($page->content));


        return view('home')->extends('layouts.app');
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
}
