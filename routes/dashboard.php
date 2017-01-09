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

Route::group(['prefix' => 'backend', 'middleware' => 'auth'], function ()
{
    Route::get('/', ['as' => 'backend.dashboard.index', 'uses' => 'DashboardController@index']);

    Route::resource('posts', 'PostController');

    Route::resource('pages', 'PageController');

    Route::resource('menus', 'MenuController');

    Route::resource('categories', 'CategoryController');

    Route::resource('media', 'MediaController');

    Route::resource('user', 'UserController');

    Route::resource('settings', 'SettingController');
});
