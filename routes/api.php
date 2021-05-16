<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// api/v1/
Route::namespace('V1')->group(function ($router) {

Route::group(['prefix'=>'v1'] ,function () {

    // api/v1/passenger/register
Route::group(['prefix'=>'passenger'] ,function () {
    Route::post('register', 'PassengerController@register');
    Route::post('login', 'PassengerController@login');
    Route::post('logout', 'PassengerController@logout');
    Route::post('refresh', 'PassengerController@refrsh');
});

    Route::group(['prefix'=>'captain'] ,function () {
        Route::post('register', 'CaptainController@register');
        Route::post('login', 'CaptainController@login');
        Route::post('logout', 'CaptainController@logout');
        Route::post('refresh', 'CaptainController@refrsh');
    });

    Route::group(['prefix'=>'admin'],function () {
        Route::post('register', 'AdminController@register');
        Route::post('login', 'AdminController@login');
        Route::post('logout', 'AdminController@logout');
        Route::post('refresh', 'AdminController@refrsh');
    });
});
});


