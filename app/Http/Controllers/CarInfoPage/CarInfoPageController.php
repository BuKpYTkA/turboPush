<?php

namespace App\Http\Controllers\CarInfoPage;

use App\Models\CarInfoPage\CarInfoPage;
use App\Models\MetaTag\MetaTag;
use App\Services\MetaTagService\MetaTagService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class CarInfoPageController
 * @package App\Http\Controllers\CarInfoPage
 */
class CarInfoPageController extends Controller
{

    /**
     * @var MetaTagService
     */
    private $metaTagService;

    /**
     * CarInfoPageController constructor.
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
     * @param string $alias
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke(Request $request, string $alias)
    {
        $slug = str_slug('привет, я Антон и живу в Украине?', '-');
        /**
         * @var CarInfoPage $carInfoPage
         */
        $carInfoPage = CarInfoPage::query()->where('page_alias', $alias)->first();
        if (!$carInfoPage) {
            return abort(404);
        }
        $metaTagConfig = [
            'BRAND' => $carInfoPage->getBrand(),
            'MODELS' => $carInfoPage->getModels()
        ];
        $metaTagContent = $this->metaTagService->getCurrentMetaTags($request, $metaTagConfig);
        return view('dynamic_pages.car_info_page', [
            'carInfoPage' => $carInfoPage,
            'metaTagContent' => $metaTagContent
        ]);
    }
}
