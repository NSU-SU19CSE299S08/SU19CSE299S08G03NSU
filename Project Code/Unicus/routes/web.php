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

Route::get('/home', 'HomeController@index')->name('home');


















Route::get('/admin/login', 'AdminController@showLoginForm')->name('admin.login');
Route::Post('/admin/login/check', 'AdminController@login')->name('admin.login.submit');
Route::Post('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
