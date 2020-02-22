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
Route::get('/friends','FriendController@friends')->name('friends');
Route::get('/addfriends/{id}','FriendController@addfriends')->name('addfriends');
Route::get('/removefriends/{id}','FriendController@removefriends')->name('removefriends');
Route::get('/chat','ChatController@chat')->name('chat');
Route::get('/chat/{username}','ChatController@chatroom')->name('chatroom');

// All Verb Route For Delete,Update and edit
// Route::PUT('/update/{id}','PostController@updateProfile')->name('updateProfile');//invalid route rename this route merge conflit,commented by itoro
Route::PUT('/profileupdate', 'ProfileController@profileupdate')->name('profileupdate');
Route::post('/post/{id}', 'Postcontroller@post')->name('post');
Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');
Route::get('/dashboard/{id}', 'DashboardController@userdashboard')->name('userdashboard');
Route::get('/userprofiler', 'UserController@userprofiler')->name('userprofiler');
Route::post('/profilepicture', 'UserController@updateAvatar')->name('updateAvatar');
