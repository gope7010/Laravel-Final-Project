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

Auth::routes();

Route::get('/home', 'HomeController@index');

  Route::prefix('university')->group(function() {
    Route::get('/login', 'Auth\UniversityLoginController@showLoginForm')->name('uni.login');
    Route::post('/login', 'Auth\UniversityLoginController@login')->name('uni.login.submit');
    Route::get('/', 'UniversityController@index')->name('uni.dashboard');

  });