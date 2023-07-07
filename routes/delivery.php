<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'Lang'], function () {
    Route::group(['namespace' => 'Delivery'], function () {
        Route::get('/', 'HomeController@index');
        Route::get('orders', 'OrdersController@index');
        Route::get('profile', 'ProfileController@index');
        Route::get('wallets', 'WalletsController@index');
        Route::get('followers', 'FollowersController@index');
        Route::group(['prefix' => 'articles'], function () {
            Route::get('', 'ArticlesController@index');
        });
    });
});
