<?php

namespace App\Http\Controllers\HomePage;

use App\Models\CarInfoPage\CarInfoPage;
use App\Models\Page\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class HomePageController
 * @package App\Http\Controllers\HomePage
 */
class HomePageController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke()
    {
        $carInfoPages = CarInfoPage::query()->where([])->orderBy('page_alias')->get();
        return view('welcome', [
            'carInfoPages' => $carInfoPages,
        ]);
    }
}
