<?php

namespace App\Http\Middleware;

use App\Models\NavBarElement\NavBarElement;
use App\Models\PhoneNumber\PhoneNumber;
use App\Services\BannerImageService\BannerImageService;
use App\Services\MetaTagService\MetaTagService;
use App\Services\PageContent\PageContentService;
use Closure;
use Illuminate\Support\Facades\View;

/**
 * Class RegisterGlobalVariables
 * @package App\Http\Middleware
 */
class RegisterGlobalVariables
{

    /**
     * @var MetaTagService
     */
    private $metaTagService;

    /**
     * @var BannerImageService
     */
    private $bannerImageService;

    /**
     * @var PageContentService
     */
    private $pageContentService;

    /**
     * RegisterGlobalVariables constructor.
     * @param MetaTagService $metaTagService
     * @param BannerImageService $bannerImageService
     * @param PageContentService $pageContentService
     */
    public function __construct(MetaTagService $metaTagService, BannerImageService $bannerImageService, PageContentService $pageContentService)
    {
        $this->metaTagService = $metaTagService;
        $this->bannerImageService = $bannerImageService;
        $this->pageContentService = $pageContentService;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        View::share('metaTagContent', $this->metaTagService->getCurrentMetaTags($request));
        View::share('navBarElements', NavBarElement::query()->where([])->orderBy('order')->get());
        View::share('bannerImage', $this->bannerImageService->getCurrentBannerImage($request));
        View::share('phoneNumbers', PhoneNumber::query()->where([])->get());
        View::share('content', $this->pageContentService->get($request));
        return $next($request);
    }
}
