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

Route::get('/', 'PagesController@index')->name('MainPage');

Route::get('/about', 'PagesController@about')->name('About');

Route::get('/contact','PagesController@contact')->name('Contacts');

Route::get('/gallery','PagesController@gallery')->name('Gallery');

Route::get('/booking','PagesController@booking')->name('Booking');