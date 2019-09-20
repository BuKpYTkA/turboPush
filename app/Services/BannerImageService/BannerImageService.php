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
     * @param array $config
     * @return BannerImage
     */
    public function getCurrentBannerImage(Request $request, array $config = [])
    {
        $path = '/' . explode('/', $request->path())[0];
        /**
         * @var $bannerImage BannerImage
         */
        $bannerImage = BannerImage::query()->where('page_alias', $path)->first();
        if (!$bannerImage) {
            $bannerImage = $this->bannerImageFactory->create($path, $this->defaultBannerImage);
        }
        $bannerImage = $this->map($bannerImage, $config);
        if (!$bannerImage->getImageUrl()) {
            $bannerImage->setImageUrl($this->defaultBannerImage);
        }
        return $bannerImage;
    }

    private function map(BannerImage $bannerImage, array $config = [])
    {
        if ($config) {
            $bannerImages = $bannerImage->toArray();
            foreach ($config as $key => $value) {
                $bannerImages = str_replace("%" . $key . "%", $value, $bannerImages);
            }
            return new BannerImage($bannerImages);
        }
        return $bannerImage;
    }
}