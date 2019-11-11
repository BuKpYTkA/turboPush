<?php

namespace App\Http\Controllers\Console;

use App\Models\BannerImage\BannerImage;
use App\Models\CarInfoPage\CarInfoPage;
use App\Models\Image\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImagePathController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $message = 'SUCCESS';
        try {
            $images = Image::all();
            /**
             * @var $images Image[]
             */
            foreach ($images as $image) {
                if ($image->getUrl()) {
                    $image->setUrl('uploads/' . $image->getUrl());
                    $image->save();
                }
            }
            $carInfoPages = CarInfoPage::all();
            /**
             * @var $carInfoPages CarInfoPage[]
             */
            foreach ($carInfoPages as $carInfoPage) {
                if ($carInfoPage->getImagePath()) {
                    $carInfoPage->setImagePath('uploads/' . $carInfoPage->getImagePath());
                    $carInfoPage->save();
                }
            }
            $bannerImages = BannerImage::all();
            /**
             * @var $bannerImages BannerImage[]
             */
            foreach ($bannerImages as $bannerImage) {
                if ($bannerImage->getImageUrl()) {
                    $bannerImage->setImageUrl('uploads/' . $bannerImage->getImageUrl());
                    $bannerImage->save();
                }
            }
            echo $message;
        } catch (\Exception $exception) {
            $message = $exception->getMessage();
            echo $message;
        }
        return;
    }
}
