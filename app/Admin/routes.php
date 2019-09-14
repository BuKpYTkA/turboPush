<?php

use App\Admin\Controllers\HomeController;
use App\Admin\Controllers\ImageController;
use App\Admin\Controllers\MetaTagController;
use App\Admin\Controllers\NavBarElementController;
use App\Admin\Controllers\OrderController;
use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/dashboard', HomeController::class . '@index')->name('admin.home');
    $router->get('/', HomeController::class . '@home')->name('admin.home');
    $router->resource('/meta-tags', MetaTagController::class);
    $router->resource('/orders', OrderController::class);
    $router->resource('/images', ImageController::class);
    $router->resource('/nav-bar-elements', NavBarElementController::class);
});
