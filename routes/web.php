<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('front.index');
});


Route::group(['prefix' => 'admin'],function(){

	Route::resource('users','UsersController');
	Route::get('users/{id}/destroy','UsersController@destroy')->name('admin.users.destroy');

	Route::resource('categories','CategoriesController');
	Route::get('categories/{id}/destroy','CategoriesController@destroy')->name('admin.categories.destroy');

	Route::resource('tags','TagsController');
	Route::get('tags/{id}/destroy','TagsController@destroy')->name('admin.tags.destroy');

	Route::resource('articles','ArticlesController');
	Route::get('articles/{id}/destroy','ArticlesController@destroy')->name('admin.articles.destroy');

	Route::get('images','ImagesController@index');
});

Auth::routes();