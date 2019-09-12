<?php

use App\Admin\Controllers\OrderController;
use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resource('/meta-tags', 'MetaTagController');
    $router->resource('/orders', 'OrderController');
    $router->resource('/images', 'ImageController');
});
