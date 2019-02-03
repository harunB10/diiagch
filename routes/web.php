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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/admin', 'AdminController@index')->middleware('auth');

Route::post('/spremi', 'AdminController@save');

Route::get('/allAds', 'HomeController@showAllAds');

Route::get('/contact', 'ContactController@show');

Route::get('/obrisi/{id}', 'AdminController@delete')->middleware('auth');

Route::get('/ad/{id}', 'HomeController@showAd');
