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

Route::get('user/input', 'UserController@input')->name('user.input');
Route::post('user/input', 'UserController@input')->name('user.input');

Route::get('user/output', 'UserController@output')->name('user.output');

Route::get('user/api', 'UserController@api')->name('user.api');
Route::get('user/getapi', 'UserController@getapi')->name('user.getapi');
