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
    public function buy(Request $request, string $alias)
    {
        /**
         * @var CarInfoPage $carInfoPage
         */
        $carInfoPage = CarInfoPage::query()->where('page_alias', $alias)->first();
        if (!$carInfoPage) {
            return abort(404);
        }
        $metaTagConfig = $this->getMetaTagConfig($carInfoPage);
        $metaTagContent = $this->metaTagService->getCurrentMetaTags($request, $metaTagConfig);
        $models = $this->getModelsArray($carInfoPage);
        return view('dynamic_pages.car_info_page_buy', [
            'carInfoPage' => $carInfoPage,
            'metaTagContent' => $metaTagContent,
            'models' => $models
        ]);
    }

    public function repair(Request $request, string $alias)
    {
        /**
         * @var CarInfoPage $carInfoPage
         */
        $carInfoPage = CarInfoPage::query()->where('page_alias', $alias)->first();
        if (!$carInfoPage) {
            return abort(404);
        }
        $metaTagConfig = $this->getMetaTagConfig($carInfoPage);
        $metaTagContent = $this->metaTagService->getCurrentMetaTags($request, $metaTagConfig);
        $models = $this->getModelsArray($carInfoPage);
        return view('dynamic_pages.car_info_page_repair', [
            'carInfoPage' => $carInfoPage,
            'metaTagContent' => $metaTagContent,
            'models' => $models
        ]);
    }

    private function getMetaTagConfig(CarInfoPage $carInfoPage)
    {
        return [
            'BRAND' => $carInfoPage->getBrand(),
            'ALT_BRAND' => $carInfoPage->getBrandAdditional(),
            'ALIAS' => $carInfoPage->getPageAlias(),
            'MODELS' => $carInfoPage->getModels(),
            'MIN' => $carInfoPage->getMinPrice(),
            'MAX' => $carInfoPage->getMaxPrice()
        ];
    }

    private function getModelsArray(CarInfoPage $carInfoPage)
    {
        $modelsString = $carInfoPage->getModels();
        $modelsArray = [];
        if ($modelsString) {
            $modelsArray = explode(',', $modelsString);
        }
        return $modelsArray;
    }
}
