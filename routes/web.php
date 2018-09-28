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

Route::get('/club', function () {
    return view('club.index');
})->name('club');

Route::get('/about', function () {
    return view('club.about');
})->name('about');

Route::get('/news', function () {
    return view('club.news');
})->name('news');

Route::get('/post', function () {
    return view('club.post');
})->name('post');

Route::get('/groups', 'GroupController@index')->name('groups');

Route::post('/group/create', 'GroupController@create')->name('group.create');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
