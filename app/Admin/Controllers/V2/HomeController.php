<?php
/**
 * Created by PhpStorm.
 * User: a.neposedov
 * Date: 16.10.2019
 * Time: 11:09
 */

namespace App\Admin\Controllers\V2;

use App\Http\Controllers\Controller;

/**
 * Class HomeController
 * @package App\Admin\Controllers\V2
 */
class HomeController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke()
    {
        return view('admin.v2.home');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getPanel()
    {
        return view('admin.v2.panel');
    }

}