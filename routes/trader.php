<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'Lang'], function () {
    Route::group(['namespace' => 'Trader'], function () {
        Route::get('/', 'HomeController@index');
        Route::get('members', 'MembersController@index');
        Route::get('products', 'ProductsController@index');
        Route::get('orders', 'OrdersController@index');
        Route::get('wallets', 'WalletsController@index');
        Route::get('followers', 'FollowersController@index');
        Route::get('articles', 'ArticlesController@index');
        Route::get('stores', 'StoresController@index');
        Route::get('profile', 'ProfileController@index');
        Route::get('settings', 'SettingsController@index');
    });
});
