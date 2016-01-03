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
Route::get('/', "HomepageController@index");



Route::get('/blogs/', "admin\BlogsManagerController@index");
Route::get('/blogs/create', "admin\BlogsManagerController@create");
Route::get('/blogs/{id}/edit', 'admin\BlogsManagerController@edit');
Route::put('/blogs/{id}/edit', 'admin\BlogsManagerController@update');
Route::get('/blogs/{id}/view', 'admin\BlogsManagerController@show');
Route::get('/blogs/delete/{id}', 'admin\BlogsManagerController@destroy');
Route::post('/blogs/post_newblog', "admin\BlogsManagerController@store");
Route::post('/blogs/post_popup_img', 'admin\BlogsManagerController@post_popup_img');
Route::get('/blogs/popup_img', 'admin\BlogsManagerController@popup_img');

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
