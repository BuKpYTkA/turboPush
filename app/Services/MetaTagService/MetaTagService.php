<?php
/**
 * Created by PhpStorm.
 * User: a.neposedov
 * Date: 09.09.2019
 * Time: 15:10
 */

namespace App\Services\MetaTagService;

use App\Models\MetaTagPage\MetaTagPage;
use App\Models\MetaTagPageContent\MetaTagPageContent;
use Illuminate\Http\Request;

/**
 * Class MetaTagService
 * @package App\Services\MetaTagService
 */
class MetaTagService
{

    const DEFAULT_PAGE = 'default';

    /**
     * @param Request $request
     * @return MetaTagPageContent
     */
    public function getCurrentMetaTags(Request $request)
    {
        $defaultMetaTagPage = MetaTagPage::query()->where('page_alias', self::DEFAULT_PAGE)->first();
        $pageAlias = $request->getPathInfo();
        /**
         * @var $metaTagPage MetaTagPage
         */
        $metaTagPage = MetaTagPage::query()->where('page_alias', $pageAlias)->first();
        if (!$metaTagPage) {
            $metaTagPage = $defaultMetaTagPage;
        }
        /**
         * @var $metaTagPageContent MetaTagPageContent
         */
        $metaTagPageContent = MetaTagPageContent::query()->where('meta_tag_page_id', $metaTagPage->getId())->first();
        return $metaTagPageContent;
    }

}