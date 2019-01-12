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

Route::get('/expositions', 'ExpositionsController@index');

Route::get('/creations', 'ProductsController@index');
Route::get('/creations/{product}', 'ProductsController@show');

Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');

Route::get('/admin', 'AdminController@index')->middleware('auth');

Route::get('/admin/profile/{profile}', 'Admin\ProfileController@edit')->middleware('auth');
Route::patch('/admin/profile/edit/{profile}', 'Admin\ProfileController@update')->middleware('auth');

Route::delete('/admin/partners/image/{image}', 'Admin\ImagePartnersController@destroy')->middleware('auth');

Route::delete('/admin/creation/image/{image}', 'Admin\ImageCreationsController@destroy')->middleware('auth');

Route::get('/admin/creation', 'Admin\CreationController@index')->middleware('auth');
Route::get('/admin/creation/create', 'Admin\CreationController@create')->middleware('auth');
Route::post('/admin/creation', 'Admin\CreationController@store')->middleware('auth');
Route::get('/admin/creation/edit/{product}', 'Admin\CreationController@edit')->middleware('auth');
Route::patch('/admin/creation/edit/{product}', 'Admin\CreationController@update')->middleware('auth');
Route::delete('/admin/creation/{product}', 'Admin\CreationController@destroy')->middleware('auth');

Route::get('/admin/partners', 'Admin\PartnersController@index')->middleware('auth');
Route::get('/admin/partners/create', 'Admin\PartnersController@create')->middleware('auth');
Route::post('/admin/partners', 'Admin\PartnersController@store')->middleware('auth');
Route::get('/admin/partners/edit/{partner}', 'Admin\PartnersController@edit')->middleware('auth');
Route::patch('/admin/partners/edit/{partner}', 'Admin\PartnersController@update')->middleware('auth');
Route::delete('/admin/partners/{partner}', 'Admin\PartnersController@destroy')->middleware('auth');

Route::get('/admin/expositions', 'Admin\AdminExpositionsController@index')->middleware('auth');
Route::get('/admin/expositions/create', 'Admin\AdminExpositionsController@create')->middleware('auth');
Route::post('/admin/expositions', 'Admin\AdminExpositionsController@store')->middleware('auth');
Route::get('/admin/expositions/edit/{exposition}', 'Admin\AdminExpositionsController@edit')->middleware('auth');
Route::patch('/admin/expositions/edit/{exposition}', 'Admin\AdminExpositionsController@update')->middleware('auth');
Route::delete('/admin/expositions/{exposition}', 'Admin\AdminExpositionsController@destroy')->middleware('auth');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Auth::routes();
