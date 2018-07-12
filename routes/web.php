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

Route::get('/', 'IndexController@index')->name('index');

Route::get('/login', function () {
    return View::make('pages.login');
});

Route::get('/a', function () {
    return view('a');
});

Route::get('/influencer', function () {
    return View::make('pages.influencer');
});

Route::resource('profile','ProfileController');

Route::get('/post_job', function() {
    return View::make('pages.post_job');
});

Route::get('/list', function() {
    return View::make('pages.list');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

$this->get('/verify-user/{code}', 'Auth\RegisterController@activateUser')->name('activate.user');
