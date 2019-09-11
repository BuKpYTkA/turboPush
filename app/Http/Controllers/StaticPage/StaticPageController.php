<?php

namespace App\Http\Controllers\StaticPage;

use App\Models\MetaTagPage\MetaTagPage;
use App\Services\MetaTagService\MetaTagService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class StaticPageController
 * @package App\Http\Controllers\StaticPage
 */
class StaticPageController extends Controller
{

    /**
     * @var MetaTagService
     */
    private $metaTagService;

    /**
     * StaticPageController constructor.
     * @param MetaTagService $metaTagService
     */
    public function __construct(MetaTagService $metaTagService)
    {
        $this->metaTagService = $metaTagService;
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param string $pageAlias
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke(Request $request, string $pageAlias)
    {
        $viewPath = 'staticPages.' . $pageAlias;
        if (!view()->exists($viewPath)) {
            return abort(404);

        }
        $metaTagContent = $this->metaTagService->getCurrentMetaTags($request);
        $viewPath = 'staticPages.' . $pageAlias;
        return view($viewPath, [
            'metaTagContent' => $metaTagContent
        ]);
    }

}
