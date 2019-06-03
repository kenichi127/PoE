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

Route::get('/answer', function () {
    return view('answer');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/post', 'HomeController@post')->name('post');
Route::get('/users', 'UserController@users');
Route::get('/user/{id}/home', 'UserController@user_home');
Route::get('reset/mailable/send', 'SampleController@PasswordResetNotification');