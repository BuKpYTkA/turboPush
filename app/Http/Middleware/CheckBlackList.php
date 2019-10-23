<?php

namespace App\Http\Middleware;

use App\Services\BlackList\BlackListService;
use Closure;

class CheckBlackList
{

    /**
     * @var BlackListService
     */
    private $blackListService;

    /**
     * CheckBlackList constructor.
     * @param BlackListService $blackListService
     */
    public function __construct(BlackListService $blackListService)
    {
        $this->blackListService = $blackListService;
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
        $this->blackListService->validate($request->ip());
        return $next($request);
    }
}
