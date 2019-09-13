<?php

namespace App\Http\Middleware;

use App\Models\NavBarElement\NavBarElement;
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
     * RegisterGlobalVariables constructor.
     * @param MetaTagService $metaTagService
     */
    public function __construct(MetaTagService $metaTagService)
    {
        $this->metaTagService = $metaTagService;
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
        return $next($request);
    }
}
