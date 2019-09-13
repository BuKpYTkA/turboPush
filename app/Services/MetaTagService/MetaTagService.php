<?php
/**
 * Created by PhpStorm.
 * User: a.neposedov
 * Date: 09.09.2019
 * Time: 15:10
 */

namespace App\Services\MetaTagService;

use App\Models\MetaTag\MetaTag;
use App\Services\Factories\MetaTagFactory\MetaTagFactory;
use Illuminate\Http\Request;

/**
 * Class MetaTagService
 * @package App\Services\MetaTagService
 */
class MetaTagService
{

    const DEFAULT_PAGE = 'default';

    /**
     * @var MetaTagFactory
     */
    private $metaTagFactory;
    /**
     * @var array
     */
    private $defaultMetaTags;

    /**
     * MetaTagService constructor.
     * @param MetaTagFactory $metaTagFactory
     * @param array $defaultMetaTags
     */
    public function __construct(MetaTagFactory $metaTagFactory, array $defaultMetaTags)
    {
        $this->metaTagFactory = $metaTagFactory;
        $this->defaultMetaTags = $defaultMetaTags;
    }

    /**
     * @param Request $request
     * @return MetaTag
     */
    public function getCurrentMetaTags(Request $request)
    {
        $metaTag = MetaTag::query()->where('page_alias', $request->getPathInfo())->first();
        if (!$metaTag) {
            $metaTag = $this->metaTagFactory->createFromArray($this->defaultMetaTags);
        }
        return $this->fillEmptyFields($metaTag);
    }

    /**
     * @param MetaTag $metaTag
     * @return MetaTag
     */
    private function fillEmptyFields(MetaTag $metaTag)
    {
        $defaultMetaTag = $this->metaTagFactory->createFromArray($this->defaultMetaTags);
        if (!$metaTag->getH1()) {
            $metaTag->setH1($defaultMetaTag->getH1());
        }
        if (!$metaTag->getOgDescription()) {
            $metaTag->setOgDescription($defaultMetaTag->getOgDescription());
        }
        if (!$metaTag->getDescription()) {
            $metaTag->setDescription($defaultMetaTag->getDescription());
        }
        if (!$metaTag->getKeywords()) {
            $metaTag->setKeywords($defaultMetaTag->getKeywords());
        }
        if (!$metaTag->getOgTitle()) {
            $metaTag->setOgTitle($defaultMetaTag->getOgTitle());
        }
        if (!$defaultMetaTag->getTitle()) {
            $metaTag->setTitle($defaultMetaTag->getTitle());
        }
        return $metaTag;
    }

}