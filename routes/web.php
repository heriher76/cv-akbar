<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index');

Auth::routes();

Route::post('/send-message', 'Admin\MessageController@store');

// Group Auth middleware
Route::group(["middleware" => "auth", "prefix" => "admin"], function(){
	Route::get('/', 'AdminPagesController@dashboard');
	
	Route::get('/my-profile', 'Admin\MyProfileController@index');
	Route::put('/my-profile', 'Admin\MyProfileController@update');
	
	Route::get('/about-me', 'Admin\AboutMeController@index');
	Route::put('/about-me', 'Admin\AboutMeController@update');

	Route::get('/address', 'Admin\AddressController@index');
	Route::put('/address', 'Admin\AddressController@update');

	Route::get('/message', 'Admin\MessageController@index');

	Route::delete('/message/{id}', 'Admin\MessageController@destroy');

	Route::resource('/portfolio', 'Admin\PortfolioController');

	Route::resource('/skill', 'Admin\SkillController');

	Route::resource('/education', 'Admin\EducationController');

	Route::resource('/gallery', 'Admin\GalleryController');
});