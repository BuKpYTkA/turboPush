<?php
/**
 * Created by PhpStorm.
 * User: a.neposedov
 * Date: 21.10.2019
 * Time: 11:30
 */

namespace App\Admin\Controllers\V2\Ajax;

use App\Http\Controllers\Controller;
use App\Http\Resources\SideMenu\SideMenuResource;
use App\Models\SideMenu\SideMenu;
use Encore\Admin\Auth\Database\Menu;

/**
 * Class SideMenuController
 * @package App\Admin\Controllers\V2\Ajax
 */
class SideMenuController extends Controller
{

    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function __invoke()
    {
        $menu = SideMenu::query()->where(['parent_id' => 0])->orderBy('order')->get();
        return SideMenuResource::collection($menu);
    }

}