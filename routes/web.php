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

Route::get('/','FrontEndController@homePage')->name('/');
Route::get('new','FrontEndController@new')->name('new');
Route::post('save','FrontEndController@save')->name('save');


Route::get('/octhomepage','FrontEndController@octhome')->name('octhomepage');

