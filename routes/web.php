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
// landing Page Route
Route::get('/', function () {
    return view('landing');
});
// All Auth Route
Auth::routes();

// all Route Thet return View
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard','DashboardController@dashboard')->name('dashboard');
Route::get('/forum','ForumController@forum')->name('forum');
Route::get('/friends','FriendsController@friends')->name('friends');
Route::get('/chat','ChatController@chat')->name('chat');
Route::get('/chat/{username}','ChatController@chatroom')->name('chatroom');

// All Verb Route For Delete,Update and edit
Route::PUT('/update/{id}','PostController@updateProfile')->name('updateProfile');
Route::PUT('/update/{id}', 'ProfileController@updateProfile')->name('updateProfile');

// All Verb Route For Delete,Update and edit
Route::PUT('/update/{id}', 'PostController@updateProfile')->name('updateProfile');

// post route
Route::post('/post/{id}', 'Postcontroller@post')->name('post');


//Dashindex
Route::get('/dashindex', 'DashboardController@dashindex')->name('dashindex');
//Avatar
Route::get('/userprofiler', 'UserController@userprofiler')->name('userprofiler');
Route::post('/profilepicture', 'UserController@updateAvatar')->name('updateAvatar');
