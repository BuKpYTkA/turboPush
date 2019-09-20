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

use App\Http\Controllers\AdminPanel\PageContent\PageContentController;
use App\Http\Controllers\CarInfoPage\CarInfoPageController;
use App\Http\Controllers\Order\CreateOrderController;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\PriceList\PriceListController;
use App\Http\Controllers\StaticPage\StaticPageController;



Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::match(['get', 'post'], '/page-content', PageContentController::controller())->name('adminPanel.pageContent');
});

Route::middleware(['global.vars'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('{pageAlias}', StaticPageController::controller());
    Route::get('brand/{alias}', CarInfoPageController::controller());
    Route::get('posts/{alias}', PostController::controller());
});

Route::post('/order/create', CreateOrderController::controller())->name('order.create');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
