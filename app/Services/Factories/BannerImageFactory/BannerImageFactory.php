<?php
/**
 * Created by PhpStorm.
 * User: a.neposedov
 * Date: 18.09.2019
 * Time: 11:43
 */

namespace App\Services\Factories\BannerImageFactory;

use App\Models\BannerImage\BannerImage;

/**
 * Class BannerImageFactory
 * @package App\Services\Factories\BannerImageFactory
 */
class BannerImageFactory
{

    /**
     * @param string $pageAlias
     * @param string $imageUrl
     * @param string|null $smallText
     * @return BannerImage
     */
    public function create(string $pageAlias, string $imageUrl, string $smallText = null)
    {
        return new BannerImage([
            'page_alias' => $pageAlias,
            'image_url' => $imageUrl,
            'small_text' => $smallText ?? ''
        ]);
    }
}