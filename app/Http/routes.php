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
//Admin middleware
Route::group(['middleware' => 'admin'], function() {
    Route::resource('posts', 'PostController');
});

Route::get('auth/register','Auth\AuthController@getRegister');
Route::post('auth/register','Auth\AuthController@postRegister');
//Authentication Routes
Route::get('auth/login','Auth\AuthController@getLogin');
Route::post('auth/login','Auth\AuthController@postLogin');
Route::get('auth/logout','Auth\AuthController@getLogout');
//Registration Routes
Route::get('blog/{slug}',['as'=>'blog.single',
    'uses'=>'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');

Route::get('filter/{categories}',[
    'as'=>'filter.index',
    'uses'=>'FilterController@getIndex'
]);




Route::get('/contact', 'PagesController@getContact');
Route::get('/about', 'PagesController@getAbout');
Route::get('/', 'PagesController@getIndex');

Route::resource('categories','CategoryController', ['except'=>['create']]);



