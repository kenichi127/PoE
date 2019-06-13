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
Route::get('/history', function () {
    return view('history');
});
Route::get('/food/input', function () {
    return view('food_input');
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
Route::post('/contribution/delete/{id}', 'ContributionController@delete');
Route::get('/users', 'UserController@users');
Route::get('/contribution/{id}/edit', 'ContributionController@contribution_edit');
Route::get('/contribution/{id}/update', 'ContributionController@contribution_update');
Route::get('/user/{id}/edit', 'UserController@user_edit');
Route::get('/user/{id}/update', 'UserController@user_update');
Route::get('/food', 'FoodlistController@show');
Route::post('/food/inputdata', 'FoodlistController@post')->name('fpost');
Route::get('/food/edit/{id}', 'FoodlistController@food_edit');
Route::get('/food/update/{id}', 'FoodlistController@food_update');
Route::get('/food/delete/{id}', 'FoodlistController@delete');
Route::post('/answer', 'AnswerController@answer')->name('answer');
Route::get('/answer', 'AnswerController@answer');
