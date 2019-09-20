<?php

use App\Admin\Controllers\BannerImageController;
use App\Admin\Controllers\CarInfoPageController;
use App\Admin\Controllers\HomeController;
use App\Admin\Controllers\ImageController;
use App\Admin\Controllers\MetaTagController;
use App\Admin\Controllers\NavBarElementController;
use App\Admin\Controllers\OrderController;
use App\Admin\Controllers\PostsController;
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
    $router->resource('/banner-images', BannerImageController::class);
    $router->resource('/car-info-pages', CarInfoPageController::class);
    $router->resource('/posts', PostsController::class);
});
