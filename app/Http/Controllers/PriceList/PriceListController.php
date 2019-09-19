<?php

namespace App\Http\Controllers\PriceList;

use App\Models\BannerImage\BannerImage;
use App\Models\Image\Image;
use App\Models\MetaTagPage\MetaTagPage;
use App\Models\MetaTagPageContent\MetaTagPageContent;
use App\Models\NavBarElement\NavBarElement;
use App\Models\PageContent\PageContent;
use App\Services\MetaTagService\MetaTagService;
use App\Services\StorageService\AdminStorageService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class PriceListController
 * @package App\Http\Controllers\PriceList
 */
class PriceListController extends Controller
{

    /**
     * @var MetaTagService
     */
    private $metaTagService;
    /**
     * @var AdminStorageService
     */
    private $storageService;

    /**
     * StaticPageController constructor.
     * @param MetaTagService $metaTagService
     * @param AdminStorageService $storageService
     */
    public function __construct(MetaTagService $metaTagService, AdminStorageService $storageService)
    {
        $this->metaTagService = $metaTagService;
        $this->storageService = $storageService;
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke(Request $request)
    {
        $content = '';
        $pageContent = PageContent::query()->where('page_alias', $request->getPathInfo())->first();
        if ($pageContent) {
            $content = $pageContent->getContent();
        }
        return view('staticPages.price-list', [
            'content' => $content
        ]);
    }
}
