<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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
    Route::group(['namespace' => 'Web'], function () {
        Route::get('/', function () {
            Artisan::call('cache:clear');
            return redirect(url('home'));
        });
        Route::get('home', 'HomeController@index');
        Route::get('auth', 'AuthController@index');
        Route::get('articles', 'ArticlesController@index');
        Route::get('articleDetails/{id}', 'ArticlesController@show');
        Route::get('posts', 'PostsController@index');
        Route::get('allProducts', 'ProductsController@all');
        Route::get('shop', 'ProductsController@index');
        Route::get('productDetails/{id}', 'ProductsController@show');
    });
});
