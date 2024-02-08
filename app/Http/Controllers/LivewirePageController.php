<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Livewire\Component;
use Waynelogic\FilamentCms\Models\Page;

class LivewirePageController extends Component
{
    public Page $page;

    public $pageView;

    public function page($url = '/') {
        if ($url === ' ' or $url === '') {
            $url = '/';
        }

        $page = Page::where('url', $url)->first();
        if (!$page or empty($page->view)) {
            abort(404);
        }
        $this->page = $page;
        $this->content = json_decode(json_encode($page->content));

        if (\request()->ajax()) {
            $action = \request()->header('Method');
            if (empty($action)) {
                return null;
            }
            return $page->template_model->$action();
        }
        return $this->render();
    }

    public function render()
    {
        return view($this->page->view);
    }
}
