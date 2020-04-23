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



Auth::routes();
Route::get('/', 'IndexController@home')->name('Index');
Route::get('/home', 'IndexController@home')->name('home');
Route::get('/item/create', 'ItemController@create')->name('item.create');
Route::post('/item/store', 'ItemController@store')->name('item.store');
