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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard','PageController@dashboard');
Route::get('/tasks','PageController@tasks');
Route::get('/mytasks','PageController@mytasks');
Route::get('/projects','PageController@projects');
Route::get('/clients','PageController@clients');
Route::get('/priority','PageController@priority');

Route::get('/profile','PageController@profile');
Route::get('/setting','PageController@setting');