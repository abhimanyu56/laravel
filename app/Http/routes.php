<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'as' => '/', 'uses' => 'PagesController@getIndex'
]);

Route::get('admin', [
    'as' => '/', 'uses' => 'AdminController@getIndex'
]);

Route::get('add', [
    'as' => '/', 'uses' => 'AdminController@getAdd'
]);

Route::get('delete/{id}', [
    'as' => '/', 'uses' => 'AdminController@deleteAcademy'
]);

Route::get('edit/{id}', [
    'as' => '/', 'uses' => 'AdminController@editAcademy'
]);

Route::post('edit/{id}', [
    'as' => '/', 'uses' => 'AdminController@updateAcademy'
]);

Route::post('add', [
    'as' => '/', 'uses' => 'AdminController@addAcademy'
]);

Route::get('explore', [
    'as' => '/', 'uses' => 'AdminController@explore'
]);

Route::get('academy/{id}', [
    'as' => '/', 'uses' => 'AdminController@loadAcademy'
]);


Route::post('explore', [
    'as' => '/', 'uses' => 'AdminController@getExplore'
]);



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
