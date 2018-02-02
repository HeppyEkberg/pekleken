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


Route::post('/ajax/randomquestion', 'HomeController@random')->name('home.random');
Route::get('/ajax/randomquestion', 'HomeController@random')->name('home.random');
Route::get('/clear', 'HomeController@clear')->name('home.clear');
Route::get('/snusk', 'HomeController@snusk')->name('home.snusk');
Route::get('/{question}', 'HomeController@show')->name('home.show');
Route::get('/', 'HomeController@index')->name('home.index');
