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



Route::group(['prefix' => ''], function () {
    Route::get('', 'front\FrontController@Home');
    Route::get('/contact-us', 'front\FrontController@contact');
    Route::get('/about-us', 'front\FrontController@about');
    Route::get('/explore', 'front\FrontController@search');
    Route::get('/show-result', 'front\FrontController@showResult');
    Route::get('/show-result/show-detail', 'front\FrontController@showDetail');
});



// Route::get('/system','admin\LoginController@Index')->name("system");

// Route::post('/system/create-step2','admin\LoginController@postCreateStep2')->name("step2");
// Route::get('/system/create-step2','admin\LoginController@CreateStep2');

// Route::post('/system','admin\LoginController@store');



Route::group(['prefix' => 'system'], function () {
    //Create Company

    Route::post('create-step2', 'auth\LoginController@postCreateStep2')->name("step2");
    Route::get('create-step2', 'auth\LoginController@CreateStep2');
    Route::post('', 'auth\LoginController@store');

    //login
    Route::get('', 'auth\LoginController@Index')->name("login");
    Route::post('/login', 'auth\LoginController@login');
});

Route::group(['prefix' => 'system', 'middleware' => 'auth'], function () {


    //Login 

    Route::get('logout', 'auth\LoginController@logout');

    //Dashboard
    Route::get('dashboard', 'admin\DashboardController@index');

    //Staff
    Route::get('staff/{trash?}', 'admin\StaffController@index');
    Route::get('createStaff', 'admin\StaffController@create');
    Route::post('storeStaff', 'admin\StaffController@store');
    Route::get('editStaff/{id}', 'admin\StaffController@edit');
    Route::post('updateStaff/{id}', 'admin\StaffController@update');
    Route::get('/staffStatus/{id}/{status}/', 'admin\StaffController@setStatus');


    //User
    Route::get('user', 'admin\UserController@index');
    Route::get('createUser', 'admin\UserController@create');
    Route::POST('storeUser', 'admin\UserController@store');
    Route::GET('editUser/{id}', 'admin\UserController@edit');
    Route::POST('updateUser/{id}', 'admin\UserController@update');
    Route::GET('setActive/{id}', 'admin\UserController@setActive');

    //Agency
    Route::get('agency', 'admin\AgencyController@index');
    Route::get('createAgency', 'admin\AgencyController@create');
    Route::get('editAgency/{id}', 'admin\AgencyController@edit');
    Route::get('deleteAgency/{id}', 'admin\AgencyController@destroy');
    Route::post('storeAgency', 'admin\AgencyController@store');
    Route::patch('updateAgency/{id}', 'admin\AgencyController@update');

    //AgencyType
    Route::get('agencyType', 'admin\AgencyTypeController@index');
    Route::get('createAgencyType', 'admin\AgencyTypeController@create');



    //Partner
    Route::get('partner', 'admin\PartnerController@index');
    Route::get('createPartner', 'admin\PartnerController@create');
    Route::get('editPartner/{id}', 'admin\PartnerController@edit');
    Route::get('deletePartner/{id}', 'admin\PartnerController@destroy');
    Route::post('updatePartner/{id}', 'admin\PartnerController@update');
    Route::post('partner', 'admin\PartnerController@store');


    //PartnerType
    Route::get('partnerType', 'admin\PartnerTypeController@index');
    Route::get('createPartnerType', 'admin\PartnerTypeController@create');
    Route::post('partnerType', 'admin\PartnerTypeController@store');
    Route::get('editPartnerType/{id}', 'admin\PartnerTypeController@edit');
    Route::post('partnerType', 'admin\PartnerTypeController@store');
    Route::post('updatePartnerType/{id}', 'admin\PartnerTypeController@update');

    //Payment
    Route::get('payment', 'admin\PaymentController@index');
    Route::get('createPaymentBook', 'admin\PaymentController@createPaymentBook');
    Route::get('createPaymentInstallment', 'admin\PaymentController@createPaymentInstallment');



    //Contract
    Route::get('contract', 'admin\ContractController@index');
    Route::get('createContract', 'admin\ContractController@create');
    Route::get('schedule', 'admin\ContractController@schedule');


    //Book
    Route::get('book', 'admin\BookController@index');
    Route::get('createBook', 'admin\BookController@create');

    //Project
    Route::get('project', 'admin\ProjectController@index');
    Route::get('createProject', 'admin\ProjectController@create');
});
