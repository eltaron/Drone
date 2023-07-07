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
                Route::post('destroyoffer', 'ProductsController@destroyoffer');
                Route::post('destroyspecial', 'ProductsController@destroyspecial');
                Route::post('edit', 'ProductsController@edit');
                Route::post('storeoffer', 'ProductsController@storeoffer');
                Route::post('storespecial', 'ProductsController@storespecial');
            });
            Route::get('offers', 'ProductsController@offers');
            Route::get('specialist', 'ProductsController@specialist');
            Route::group(['prefix' => 'orders'], function () {
                Route::get('', 'OrdersController@index');
                Route::post('status', 'OrdersController@status');
                Route::post('destroy', 'OrdersController@destroy');
            });
            Route::get('wallets', 'WalletsController@index');
            Route::get('followers', 'FollowersController@index');
            Route::group(['prefix' => 'articles'], function () {
                Route::get('', 'ArticlesController@index');
                Route::post('store', 'ArticlesController@store');
                Route::post('destroy', 'ArticlesController@destroy');
                Route::post('edit', 'ArticlesController@edit');
            });
            Route::get('stores', 'StoresController@index');
            Route::get('profile', 'ProfileController@index');
            Route::post('profile', 'ProfileController@update');
            Route::get('settings', 'SettingsController@index');
        });
    });
});
