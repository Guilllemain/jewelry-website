<?php

Route::get('/mentions', function () {
    return view('mentions');
});

Route::get('/', 'WelcomeController@index');

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

Route::prefix('/admin')->namespace('Admin')->group(function () {
    Route::get('/', 'HomeController@index');

    Route::get('/welcome/{welcomeImage}', 'WelcomeController@edit');
    Route::patch('/welcome/{welcomeImage}', 'WelcomeController@update');

    Route::get('/profile/{profile}', 'ProfileController@edit');
    Route::patch('/profile/edit/{profile}', 'ProfileController@update');

    Route::get('/creation', 'CreationController@index');
    Route::get('/creation/create', 'CreationController@create');
    Route::post('/creation', 'CreationController@store');
    Route::get('/creation/edit/{product}', 'CreationController@edit');
    Route::patch('/creation/edit/{product}', 'CreationController@update');
    Route::delete('/creation/{product}', 'CreationController@destroy');
    Route::delete('/creation/image/{image}', 'ImageCreationsController@destroy');

    Route::get('/partners', 'PartnersController@index');
    Route::get('/partners/create', 'PartnersController@create');
    Route::post('/partners', 'PartnersController@store');
    Route::get('/partners/edit/{partner}', 'PartnersController@edit');
    Route::patch('/partners/edit/{partner}', 'PartnersController@update');
    Route::delete('/partners/{partner}', 'PartnersController@destroy');
    Route::delete('/partners/image/{image}', 'ImagePartnersController@destroy');

    Route::get('/expositions', 'ExpositionsController@index');
    Route::get('/expositions/create', 'ExpositionsController@create');
    Route::post('/expositions', 'ExpositionsController@store');
    Route::get('/expositions/edit/{exposition}', 'ExpositionsController@edit');
    Route::patch('/expositions/edit/{exposition}', 'ExpositionsController@update');
    Route::delete('/expositions/{exposition}', 'ExpositionsController@destroy');
    Route::delete('/expositions/image/{image}', 'ImageNewsController@destroy');
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');