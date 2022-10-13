<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|ss
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@login_save');

Route::get('/register', 'LoginController@register');
Route::post('/register', 'LoginController@register_save');

Route::group(['middleware' => 'auth'], function() {

    Route::get('/', function () {
        return view('home.index');
    })->name('home');

});
