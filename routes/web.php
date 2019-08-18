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






Route::group(['prefix' => 'react', 'middleware' => 'auth'], function () {


    //Login 

    Route::get('logout', 'auth\LoginController@logout');

    //Dashboard
    Route::get('dashboard', 'react\DashboardController@index');

    //Staff
    Route::get('staff/{trash?}', 'react\StaffController@index');
    Route::get('createStaff', 'react\StaffController@create');
    Route::post('storeStaff', 'react\StaffController@store');
    Route::get('editStaff/{id}', 'react\StaffController@edit');
    Route::post('updateStaff/{id}', 'react\StaffController@update');
    Route::get('/staffStatus/{id}/{status}/', 'react\StaffController@setStatus');


    //User
    Route::get('user', 'react\UserController@index');
    Route::get('createUser', 'react\UserController@create');
    Route::POST('storeUser', 'react\UserController@store');
    Route::GET('editUser/{id}', 'react\UserController@edit');
    Route::POST('updateUser/{id}', 'react\UserController@update');
    Route::GET('setActive/{id}', 'react\UserController@setActive');

    //Agency
    Route::get('agency', 'react\AgencyController@index');
    Route::get('createAgency', 'react\AgencyController@create');
    Route::get('editAgency/{id}', 'react\AgencyController@edit');
    Route::get('deleteAgency/{id}', 'react\AgencyController@destroy');
    Route::post('storeAgency', 'react\AgencyController@store');
    Route::patch('updateAgency/{id}', 'react\AgencyController@update');

    //AgencyType
    Route::get('agencyType/{trash?}', 'react\AgencyTypeController@index');
    Route::get('createAgencyType', 'react\AgencyTypeController@create');
    Route::post('storeAgencyType', 'react\AgencyTypeController@store');
    Route::get('editAgencyType/{id}', 'react\AgencyTypeController@edit');
    Route::post('updateAgencyType/{id}', 'react\AgencyTypeController@update');
    Route::get('agencyTypeStatus/{id}/{status}/', 'react\AgencyTypeController@setStatus');


    //Partner
    Route::get('partner', 'react\PartnerController@index');
    Route::get('createPartner', 'react\PartnerController@create');
    Route::get('editPartner/{id}', 'react\PartnerController@edit');
    Route::get('deletePartner/{id}', 'react\PartnerController@destroy');
    Route::post('updatePartner/{id}', 'react\PartnerController@update');
    Route::post('partner', 'react\PartnerController@store');


    //PartnerType
    Route::get('partnerType', 'react\PartnerTypeController@index');
    Route::get('createPartnerType', 'react\PartnerTypeController@create');
    Route::post('partnerType', 'react\PartnerTypeController@store');
    Route::get('editPartnerType/{id}', 'react\PartnerTypeController@edit');
    Route::post('partnerType', 'react\PartnerTypeController@store');
    Route::post('updatePartnerType/{id}', 'react\PartnerTypeController@update');
    Route::get('ChangeStatusPartnerType/{id}/{status}', 'react\PartnerTypeController@changeStatusPType');

    //Customer
    Route::get('customer', 'react\CustomerController@index');
    Route::get('createCustomer', 'react\CustomerController@create');
    Route::post('storeCustomer', 'react\CustomerController@store');
    Route::get('editCustomer/{id}', 'react\CustomerController@edit');
    Route::patch('updateCustomer/{id}', 'react\CustomerController@update');
    Route::get('deleteCustomer/{id}', 'react\CustomerController@destroy');

    //PropAttribute
    Route::get('propAttribute/{trash?}', 'react\Prop_Attribute@index');
    Route::get('createPropAttribute', 'react\Prop_Attribute@create');
    Route::post('storePropAttribute', 'react\Prop_Attribute@store');
    Route::get('editPropAttribute/{id}', 'react\Prop_Attribute@edit');
    Route::post('updatePropAttribute/{id}', 'react\Prop_Attribute@update');
    Route::get('deletePropAttribute/{id}', 'react\Prop_Attribute@destroy');
    Route::get('/propAttributeStatus/{id}/{status}/', 'react\Prop_Attribute@setStatus');

    //PropertiesTypes
    Route::get('PropTypes/{trash?}', 'react\Property_Type@index');
    Route::get('createPropTypes', 'react\Property_Type@create');
    Route::post('storePropTypes', 'react\Property_Type@store');
    Route::get('editPropTypes/{id}', 'react\Property_Type@edit');
    Route::post('updatePropTypes/{id}', 'react\Property_Type@update');
    Route::get('PropTypesStatus/{id}/{status}', 'react\Property_Type@setStatus');

    //Payment
    Route::get('payment', 'react\PaymentController@index');
    Route::get('createPaymentBook', 'react\PaymentController@createPaymentBook');
    Route::get('createPaymentInstallment', 'react\PaymentController@createPaymentInstallment');



    //Contract
    Route::get('contract', 'react\ContractController@index');
    Route::get('createContract', 'react\ContractController@create');
    Route::get('schedule', 'react\ContractController@schedule');


    //Book
    Route::get('book', 'admin\BookController@index');
    Route::get('createBook', 'admin\BookController@create');

    //Project
    Route::get('project', 'admin\ProjectController@index');
    Route::get('createProject', 'admin\ProjectController@create');
    Route::post('storeProject/', 'admin\ProjectController@store');
    Route::get('editProject/{id}', 'admin\ProjectController@edit');
    Route::post('updateProject/{id}', 'admin\ProjectController@update');

    //Property
    Route::get('property', 'admin\PropertyController@index');
    Route::get('createProperty', 'admin\PropertyController@create');
});


Route::group(['prefix' => 'react'], function () {
    //Create Company

    Route::post('create-step2', 'auth\LoginController@postCreateStep2')->name("step2");
    Route::get('create-step2', 'auth\LoginController@CreateStep2');
    Route::post('', 'auth\LoginController@store');

    //login
    Route::get('', 'auth\LoginController@Index')->name("login");
    Route::post('/login', 'auth\LoginController@login');
});


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
    Route::get('agencyType/{trash?}', 'admin\AgencyTypeController@index');
    Route::get('createAgencyType', 'admin\AgencyTypeController@create');
    Route::post('storeAgencyType', 'admin\AgencyTypeController@store');
    Route::get('editAgencyType/{id}', 'admin\AgencyTypeController@edit');
    Route::post('updateAgencyType/{id}', 'admin\AgencyTypeController@update');
    Route::get('agencyTypeStatus/{id}/{status}/', 'admin\AgencyTypeController@setStatus');


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
    Route::get('ChangeStatusPartnerType/{id}/{status}', 'admin\PartnerTypeController@changeStatusPType');

    //Customer
    Route::get('customer', 'admin\CustomerController@index');
    Route::get('createCustomer', 'admin\CustomerController@create');
    Route::post('storeCustomer', 'admin\CustomerController@store');
    Route::get('editCustomer/{id}', 'admin\CustomerController@edit');
    Route::patch('updateCustomer/{id}', 'admin\CustomerController@update');
    Route::get('deleteCustomer/{id}', 'admin\CustomerController@destroy');

    //PropAttribute
    Route::get('propAttribute/{trash?}', 'admin\Prop_Attribute@index');
    Route::get('createPropAttribute', 'admin\Prop_Attribute@create');
    Route::post('storePropAttribute', 'admin\Prop_Attribute@store');
    Route::get('editPropAttribute/{id}', 'admin\Prop_Attribute@edit');
    Route::post('updatePropAttribute/{id}', 'admin\Prop_Attribute@update');
    Route::get('deletePropAttribute/{id}', 'admin\Prop_Attribute@destroy');
    Route::get('/propAttributeStatus/{id}/{status}/', 'admin\Prop_Attribute@setStatus');

    //PropertiesTypes
    Route::get('PropTypes/{trash?}', 'admin\Property_Type@index');
    Route::get('createPropTypes', 'admin\Property_Type@create');
    Route::post('storePropTypes', 'admin\Property_Type@store');
    Route::get('editPropTypes/{id}', 'admin\Property_Type@edit');
    Route::post('updatePropTypes/{id}', 'admin\Property_Type@update');
    Route::get('PropTypesStatus/{id}/{status}', 'admin\Property_Type@setStatus');

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
    Route::post('storeProject/', 'admin\ProjectController@store');
    Route::get('editProject/{id}', 'admin\ProjectController@edit');
    Route::post('updateProject/{id}', 'admin\ProjectController@update');

    //Property
    Route::get('property', 'admin\PropertyController@index');
    Route::get('createProperty', 'admin\PropertyController@create');
});
