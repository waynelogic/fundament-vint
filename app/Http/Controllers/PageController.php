<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Waynelogic\FilamentCms\Models\Page;

class PageController extends Controller
{
    public function __invoke(Request $request)
    {
        $url = $request->path();
        if ($url === ' ' or $url === '') {
            $url = '/';
        }

        $page = Page::where('url', $url)->first();
        if (!$page or empty($page->view)) {
            abort(404);
        }

        if ($request->ajax()) {
            $action = $request->header('Method');
            if (empty($action)) {
                return null;
            }
            return $page->template_model->$action();
        }
        return view($page->view, [
            'content' => json_decode(json_encode($page->content)),
        ]);
    }
}
