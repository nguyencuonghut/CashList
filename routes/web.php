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

Route::get('/', 'CashController@create')->name('cashes.create');
Route::get('cashes/data', 'CashController@anyData')->name('cashes.data');
Route::resource('cashes', 'CashController');


Route::get('pays/data', 'PaysController@anyData')->name('pays.data');
Route::resource('pays', 'PaysController');

