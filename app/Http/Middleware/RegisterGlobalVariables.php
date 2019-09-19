<?php

namespace App\Http\Middleware;

use App\Models\NavBarElement\NavBarElement;
use App\Services\BannerImageService\BannerImageService;
use App\Services\MetaTagService\MetaTagService;
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
     * RegisterGlobalVariables constructor.
     * @param MetaTagService $metaTagService
     * @param BannerImageService $bannerImageService
     */
    public function __construct(MetaTagService $metaTagService, BannerImageService $bannerImageService)
    {
        $this->metaTagService = $metaTagService;
        $this->bannerImageService = $bannerImageService;
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
        return $next($request);
    }
}
