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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mentions', function () {
    return view('mentions');
});

Route::get('/home', function () {
    return view('main');
});

Route::get('/portrait', function () {
    return view('portrait');
});

Route::get('/collaborations', 'CollaborationsController@index');
Route::get('/collaborations/{partner}', 'CollaborationsController@show');

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/creations', 'ProductsController@index');
Route::get('/creations/{product}', 'ProductsController@show');

Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');

Route::get('/admin', 'AdminController@index')->middleware('auth');

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


Auth::routes();
