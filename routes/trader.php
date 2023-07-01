<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'Lang'], function () {
    Route::group(['namespace' => 'Trader'], function () {
        Route::group(['middleware' => ['auth']], function () {
            Route::get('/', 'HomeController@index');
            Route::get('members', 'MembersController@index');
            Route::group(['prefix' => 'products'], function () {
                Route::get('', 'ProductsController@index');
                Route::post('store', 'ProductsController@store');
                Route::post('destroy', 'ProductsController@destroy');
                Route::post('edit', 'ProductsController@edit');
            });
            Route::get('offers', 'ProductsController@index');
            Route::get('orders', 'OrdersController@index');
            Route::get('wallets', 'WalletsController@index');
            Route::get('followers', 'FollowersController@index');
            Route::group(['prefix' => 'products'], function () {
                Route::get('', 'ArticlesController@index');
            });
            Route::get('stores', 'StoresController@index');
            Route::get('profile', 'ProfileController@index');
            Route::post('profile', 'ProfileController@update');
            Route::get('settings', 'SettingsController@index');
        });
    });
});
