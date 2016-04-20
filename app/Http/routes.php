<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/my-profil', 'HomeController@myProfil');

    Route::post('/my-profil/edit', 'HomeController@editMyProfil');
    Route::post('/my-profil/change-password', 'HomeController@changePassword');
});
