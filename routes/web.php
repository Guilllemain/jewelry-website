<?php

Route::get('/mentions', function () {
    return view('mentions');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/portrait', 'ProfileController@index');

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/collaborations', 'CollaborationsController@index');
Route::get('/collaborations/{partner}', 'CollaborationsController@show');

Route::get('/news', 'ExpositionsController@index');

Route::get('/creations', 'ProductsController@index');
Route::get('/creations/{product}', 'ProductsController@show');

Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');

Route::group(['middleware' => ['auth']], function () {
	Route::get('/admin/welcome', 'Admin\WelcomeController@index');

	Route::get('/admin', 'AdminController@index');

	Route::get('/admin/profile/{profile}', 'Admin\ProfileController@edit');
	Route::patch('/admin/profile/edit/{profile}', 'Admin\ProfileController@update');

	Route::delete('/admin/partners/image/{image}', 'Admin\ImagePartnersController@destroy');

	Route::delete('/admin/creation/image/{image}', 'Admin\ImageCreationsController@destroy');

	Route::get('/admin/creation', 'Admin\CreationController@index');
	Route::get('/admin/creation/create', 'Admin\CreationController@create');
	Route::post('/admin/creation', 'Admin\CreationController@store');
	Route::get('/admin/creation/edit/{product}', 'Admin\CreationController@edit');
	Route::patch('/admin/creation/edit/{product}', 'Admin\CreationController@update');
	Route::delete('/admin/creation/{product}', 'Admin\CreationController@destroy');

	Route::get('/admin/partners', 'Admin\PartnersController@index');
	Route::get('/admin/partners/create', 'Admin\PartnersController@create');
	Route::post('/admin/partners', 'Admin\PartnersController@store');
	Route::get('/admin/partners/edit/{partner}', 'Admin\PartnersController@edit');
	Route::patch('/admin/partners/edit/{partner}', 'Admin\PartnersController@update');
	Route::delete('/admin/partners/{partner}', 'Admin\PartnersController@destroy');

	Route::get('/admin/expositions', 'Admin\AdminExpositionsController@index');
	Route::get('/admin/expositions/create', 'Admin\AdminExpositionsController@create');
	Route::post('/admin/expositions', 'Admin\AdminExpositionsController@store');
	Route::get('/admin/expositions/edit/{exposition}', 'Admin\AdminExpositionsController@edit');
	Route::patch('/admin/expositions/edit/{exposition}', 'Admin\AdminExpositionsController@update');
	Route::delete('/admin/expositions/{exposition}', 'Admin\AdminExpositionsController@destroy');
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Auth::routes();
