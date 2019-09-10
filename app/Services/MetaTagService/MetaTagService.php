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
     * MetaTagService constructor.
     * @param MetaTagFactory $metaTagFactory
     */
    public function __construct(MetaTagFactory $metaTagFactory)
    {
        $this->metaTagFactory = $metaTagFactory;
    }

    /**
     * @param Request $request
     * @return MetaTag
     */
    public function getCurrentMetaTags(Request $request)
    {
        $metaTag = MetaTag::query()->where('page_alias', $request->getPathInfo())->first();
        if (!$metaTag) {
            $metaTag = $this->metaTagFactory->createFromArray(config('metatags'));
        }
        return $metaTag;
    }

}