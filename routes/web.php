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
    return view('index');
});



Route::get('/contact', 'ContactController@displayForm');

Route::post('/contact/submit', 'ContactController@submitForm');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/admin', 'AdminController@index');



