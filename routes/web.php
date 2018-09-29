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

Route::get('/login-register', function () {
    return view('auth.sign');
})->name('auth.sign');

Route::get('/club/{club}', 'ClubController@index')->name('club');

Route::get('/club/{club}/about', function () {
    return view('club.about');
})->name('about');

Route::get('/club/news', function () {
    return view('club.news');
})->name('news');

Route::get('/club/post', function () {
    return view('club.post');
})->name('post');

Route::get('/club/groups', 'GroupController@index')->name('groups');
Route::post('/club/group/create', 'GroupController@create')->name('group.create');
Route::get('/club/group/{group?}', 'GroupController@view')->name('group');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
