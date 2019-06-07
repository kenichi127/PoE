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
Route::get('/contribution', function () {
    return view('contribution');
});
Route::get('/history', function () {
    return view('history');
});
Route::get('/food', function () {
    return view('foodlist');
});
Route::get('/addpage', function () {
    return view('add');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/post', 'HomeController@post')->name('post');
Route::get('/users', 'UserController@users');
Route::get('/sample/mailable/send', 'SampleController@SampleNotification');
