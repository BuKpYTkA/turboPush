<?php

namespace App\Http\Controllers\AdminPanel\PageContent;

use App\Models\PageContent\PageContent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageContentController extends Controller
{

    public function __invoke(Request $request)
    {
        if ($request->post()) {
            PageContent::query()->updateOrCreate([
                'page_alias' => '/price-list'
            ], [
                'content' => $request->post('content')
            ]);
        }
        $content = '';
        /**
         * @var $pageContent PageContent
         */
        $pageContent = PageContent::query()->where('page_alias', '/price-list')->first();
        if ($pageContent) {
            $content = $pageContent->getContent();
        }
        return view('adminPanel.pageContent.pageContent', [
            'content' => $content
        ]);
    }
}
