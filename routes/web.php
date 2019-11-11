<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\CarInfoPage\CarInfoPageController;
use App\Http\Controllers\Console\ImagePathController;
use App\Http\Controllers\HomePage\HomePageController;
use App\Http\Controllers\Order\ConfirmOrderController;
use App\Http\Controllers\Order\CreateOrderController;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\StaticPage\StaticPageController;


Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
});
Route::get('/update-images-service', ImagePathController::controller());
Route::middleware(['blacklist'])->group(function () {
    Route::middleware(['global.vars'])->group(function () {
        Route::get('/', HomePageController::controller());
        Route::get('about', PostController::controller() . '@getPosts');
        Route::get('{pageAlias}', StaticPageController::controller());
        Route::get('buy/{alias}', CarInfoPageController::controller() . '@buy');
        Route::get('repair/{alias}', CarInfoPageController::controller() . '@repair');
        Route::get('posts/{alias}', PostController::controller());
    });
    Route::post('/order/create', CreateOrderController::controller())->name('order.create');
    Route::get('/35bbf12ad8417bb6eaebc2898db2861df48138de/{order}', ConfirmOrderController::controller())->name('order.confirm');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
