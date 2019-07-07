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

// Route::get('/system','admin\LoginController@Index')->name("system");

// Route::post('/system/create-step2','admin\LoginController@postCreateStep2')->name("step2");
// Route::get('/system/create-step2','admin\LoginController@CreateStep2');

// Route::post('/system','admin\LoginController@store');

Route::prefix('system')->group(function () {

    //Create Company
    Route::get('', 'admin\LoginController@Index')->name("system");
    Route::post('create-step2', 'admin\LoginController@postCreateStep2')->name("step2");
    Route::get('create-step2', 'admin\LoginController@CreateStep2');
    Route::post('', 'admin\LoginController@store');



    //Dashboard
    Route::get('dashboard', 'admin\DashboardController@index');

    //Staff
    Route::get('staff', 'admin\StaffController@index');
    Route::get('createStaff', 'admin\StaffController@create');
    Route::post('storeStaff', 'admin\StaffController@store');

    //User
    Route::get('createUser', 'admin\UserController@create');
});
