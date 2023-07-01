<?php

use Illuminate\Support\Facades\Route;

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


Route::group(['middleware' => 'Lang'], function () {
    Route::group(['namespace' => 'Shop', 'prefix' => '{storename}'], function () {
        Route::get('/', 'HomeController@index');
        Route::get('product/{id}', 'HomeController@show');
        Route::get('products/{type}', 'HomeController@products');
    });
});
