<?php
/**
 * Created by PhpStorm.
 * User: a.neposedov
 * Date: 10.09.2019
 * Time: 16:39
 */

namespace App\Services\Factories\MetaTagFactory;

use App\Models\MetaTag\MetaTag;

/**
 * Class MetaTagFactory
 * @package App\Services\Factories\MetaTagFactory
 */
class MetaTagFactory
{

    /**
     * @param array $data
     * @return MetaTag
     */
    public function createFromArray(array $data)
    {
        return new MetaTag([
            'title' => $data['title'] ?? '',
            'description' => $data['description'] ?? '',
            'keywords' => $data['keywords'] ?? '',
            'h_1' => $data['h1'] ?? '',
            'og_title' => $data['ogTitle'] ?? '',
            'og_description' => $data['ogDescription'] ?? ''
        ]);
    }
}