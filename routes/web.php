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
    return view('landing');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::put('/update/{id}','PostController@updateProfile')->name('updateProfile');
Route::get('/dashindex', 'DashboardController@dashindex')->name('dashindex');
Route::get('/userprofiler', 'UserController@userprofiler')->name('userprofiler');
Route::post('/profilepicture', 'UserController@updateAvatar')->name('updateAvatar');

