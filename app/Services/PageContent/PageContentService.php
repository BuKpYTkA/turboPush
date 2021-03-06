<?php
/**
 * Created by PhpStorm.
 * User: a.neposedov
 * Date: 30.09.2019
 * Time: 11:55
 */

namespace App\Services\PageContent;

use App\Models\Page\Page;
use Illuminate\Http\Request;

/**
 * Class PageContentService
 * @package App\Services\PageContent
 */
class PageContentService
{

    /**
     * @param Request $request
     * @return array|\Illuminate\Database\Eloquent\Collection
     */
    public function get(Request $request)
    {
        /**
         * @var Page $page
         */

        $pageAlias = $request->path() === '/' ? '/' : '/' . $request->path();
        $page = Page::query()->where('alias', $pageAlias)->first();
        $content = [];
        if ($page) {
            $content = $page->content()->get();
        }
        return $content;
    }
}