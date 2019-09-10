<?php
/**
 * Created by PhpStorm.
 * User: a.neposedov
 * Date: 10.09.2019
 * Time: 17:16
 */

namespace App\Admin\Modules;


use Encore\Admin\Grid\Actions\Delete;
use Encore\Admin\Grid\Actions\Edit;
use Encore\Admin\Grid\Displayers\DropdownActions;

class Actions extends DropdownActions
{

    /**
     * @var array
     */
    protected $defaultClass = [Edit::class, Delete::class];
}