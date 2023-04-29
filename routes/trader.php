<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'Lang'], function () {
    Route::group(['namespace' => 'Trader'], function () {
        Route::get('/', 'HomeController@index');
    });
});
