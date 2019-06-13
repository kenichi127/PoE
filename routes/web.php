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
Route::post('/post', 'EarhquakesController@post')->name('post');
Route::get('/users', 'UserController@users');
Route::get('/mail/mailable/send', 'MailController@MailNotification');
Route::post('/post', 'Earhquakescontroller@post')->name('post');
Route::get('/contribution', 'ContributionController@index');
Route::post('/contribution/add', 'ContributionController@add');
Route::post('/contribution/{id}/delete', 'ContributionController@delete');
Route::get('/users', 'UserController@users');
Route::get('/contribution/{id}/edit', 'ContributionController@contribution_edit');
Route::get('/contribution/{id}/update', 'ContributionController@contribution_update');
