<?php
/**
 * Created by PhpStorm.
 * User: a.neposedov
 * Date: 11.09.2019
 * Time: 15:08
 */

namespace App\Admin\Controllers;


use Encore\Admin\Controllers\AdminController;

class BaseAdminController extends AdminController
{

    public static function controller()
    {
        $path = explode('\\', self::class);
        return array_pop($path);
    }
}