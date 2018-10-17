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

Route::get('/', 'ClubController@teams');

Route::get('/login-register', function () {
    return view('auth.sign');
})->name('auth.sign');

Route::get('/{club}/about', function () {
    return view('club.about');
})->name('about');

Route::get('/{club}/news', function () {
    return view('club.news');
})->name('news');

Route::get('/{club}/shop', function () {
    return view('club.shop');
})->name('shop');

Route::get('/{club}/post', function () {
    return view('club.post');
})->name('post');

Route::get('group/messages', 'GroupController@getMsg')->name('group.msg');
Route::post('group/message/save', 'GroupController@saveMsg')->name('group.msg.save');
Route::get('group/list', 'GroupController@getList')->name('group.list');

Route::get('/{club}/groups', 'GroupController@index')->name('groups');
Route::post('/{club}/group/create', 'GroupController@create')->name('group.create');
Route::post('/{club}/group/join', 'GroupController@join')->name('group.join');
Route::post('/{club}/group/leave', 'GroupController@leave')->name('group.leave');


Route::get('/teams', 'ClubController@teams')->name('teams');
Route::post('/{club}/join', 'ClubController@join')->name('team.join');
Route::post('/{club}/leave', 'ClubController@leave')->name('team.leave');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/{club}/{groups}', 'GroupController@view')->name('group');
Route::get('/{club}', 'ClubController@index')->name('club');
