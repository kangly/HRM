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

Route::get('/', 'User\LoginController@index');
Route::post('/user/login', 'User\LoginController@login');

Route::middleware(['check.login'])->group(function () {
    Route::get('/home/index', 'Home\IndexController@Index');
    Route::get('/home/sign_out', 'Home\IndexController@sign_out');
});