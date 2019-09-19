<?php
/**
 * Created by PhpStorm.
 * User: a.neposedov
 * Date: 18.09.2019
 * Time: 11:34
 */

namespace App\Services\BannerImageService;


use App\Models\BannerImage\BannerImage;
use App\Services\Factories\BannerImageFactory\BannerImageFactory;
use Illuminate\Http\Request;

class BannerImageService
{

    /**
     * @var string
     */
    private $defaultBannerImage;

    /**
     * @var BannerImageFactory
     */
    private $bannerImageFactory;

    /**
     * BannerImageService constructor.
     * @param string $defaultBannerImage
     * @param BannerImageFactory $bannerImageFactory
     */
    public function __construct(string $defaultBannerImage, BannerImageFactory $bannerImageFactory)
    {
        $this->defaultBannerImage = $defaultBannerImage;
        $this->bannerImageFactory = $bannerImageFactory;
    }

    /**
     * @param Request $request
     * @return BannerImage
     */
    public function getCurrentBannerImage(Request $request)
    {
        $path = $request->getPathInfo();
        /**
         * @var $bannerImage BannerImage
         */
        $bannerImage = BannerImage::query()->where('page_alias', $path)->first();
        if (!$bannerImage) {
            $bannerImage = $this->bannerImageFactory->create($path, $this->defaultBannerImage);
        }
        if (!$bannerImage->getImageUrl()) {
            $bannerImage->setImageUrl($this->defaultBannerImage);
        }
        return $bannerImage;
    }
}