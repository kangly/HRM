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
    Route::get('/cdd/index', 'Cdd\IndexController@index');
    Route::post('/cdd/cddList', 'Cdd\IndexController@cddList');
    Route::get('/cdd/addCdd', 'Cdd\IndexController@addCdd');
    Route::post('/cdd/saveCdd', 'Cdd\IndexController@saveCdd');
    Route::post('/cdd/deleteCdd', 'Cdd\IndexController@deleteCdd');
    Route::get('/company/index', 'Company\IndexController@index');
    Route::post('/company/companyList', 'Company\IndexController@companyList');
    Route::get('/company/job', 'Company\JobController@index');
    Route::post('/company/jobList', 'Company\JobController@jobList');
    Route::get('/staff/index', 'Staff\IndexController@index');
    Route::post('/staff/staffList', 'Staff\IndexController@staffList');
    Route::get('/system/index', 'System\IndexController@index');
    Route::post('/system/jobType', 'System\IndexController@jobType');
});