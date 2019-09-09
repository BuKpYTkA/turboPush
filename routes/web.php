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
use App\Http\Controllers\PriceList\PriceListController;
use App\Http\Controllers\StaticPage\StaticPageController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::match(['get', 'post'], '/page-content', PageContentController::controller())->name('adminPanel.pageContent');
});

Route::middleware(['global.vars'])->group(function () {
    Route::get('/price-list', PriceListController::controller());
});

Route::get('{pageAlias}', StaticPageController::controller());


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
