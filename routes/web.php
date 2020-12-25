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



Route::get('/', 'NewsController@index')->name('news');

Route::resource('news', 'NewsController')->only([
    'store'
]);

Route::resource('bookmarks', 'BookmarksController')->only([
    'index', 'store', 'destroy'
]);