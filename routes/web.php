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

Route::get('/', 'PollsController@index');
Route::get('/polls', 'PollsController@index');
Route::get('/polls/create', 'PollsController@create');
Route::get('/polls/invite', 'PollsController@invite');
Route::get('/polls/all', 'PollsController@vote');
Route::get('/polls/vote/{id}', 'PollsController@show');


Route::get('auth/login', function () {
    return view('auth.login');
});


Route::get('auth/logout', function () {
    return view('auth.logout');
});


Route::get('auth/register', function () {
    return view('auth.register');

});

Route::get('auth/profile', function () {
    return view('auth.profile');
});

Route::resource("polls","PollsController");









