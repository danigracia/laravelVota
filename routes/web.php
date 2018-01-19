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
    return view('home');
});


Route::get('auth/login', function () {
    return view('auth.login');
});


Route::get('auth/logout', function () {
    return view('auth.logout');
});


Route::get('auth/register', function () {
    return view('auth.register');

});


Route::get('profile/{id}', function ($id) {
    return view('profile', array('id'=>$id));
});

Route::get('polls/all', function () {
    return view('polls.all');
});

Route::get('polls/create', function () {
    return view('polls.create');
});

Route::get('polls/invite', function () {
    return view('polls.invite');
});

Route::get('polls/vote/{id}', function ($id) {
    return view('polls.vote', array('id'=>$id));
});










