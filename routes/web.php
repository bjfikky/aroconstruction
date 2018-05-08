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



Route::get('/', 'HomeController@index')->name('home');

Route::get('/about', 'AboutController@index');

Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');

Route::get('/services', 'ServiceController@index');

Route::get('/blog', 'BlogController@index');
Route::get('/blog/create', 'BlogController@create')->middleware('auth');
Route::post('/blog', 'BlogController@store')->middleware('auth');


Route::get('/dashboard', 'DashboardController@index')->middleware('auth');


Route::get('/sign-in', 'SessionController@index');
Route::post('/sign-in', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy')->middleware('auth');





Route::get('/home', 'HomeController@index');
