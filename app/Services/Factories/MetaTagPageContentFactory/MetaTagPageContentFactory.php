<?php


namespace App\Services\Factories\MetaTagPageContentFactory;

use App\Models\MetaTagPageContent\MetaTagPageContent;

/**
 * Class MetaTagPageContentFactory
 * @package App\Services\Factories\MetaTagPageContentFactory
 */
class MetaTagPageContentFactory
{

    public function createFromConfig(array $config = null)
    {
        return new MetaTagPageContent([
            'title' => $config['title'] ?? '',
            'description' => $config['description'] ?? '',
            'keywords' => $config['keywords'] ?? '',
            'h1' => $config['h1'] ?? '',
            'og_title' => $config['ogTitle'] ?? '',
            'og_description' => $config['ogDescription'] ?? ''
        ]);
    }
}