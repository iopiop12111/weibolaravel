<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'home\IndexController@index')->name('home');
Route::get('/help', 'home\StaticController@help')->name('help');
Route::get('/about', 'home\StaticController@about')->name('about');
Route::get('/login', 'home\PublicController@login')->name('login');
Route::get('/register', 'home\PublicController@register')->name('register');
Route::resource('user','home\UserController');
