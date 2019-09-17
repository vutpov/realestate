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
    // Route::get('/explore', 'front\FrontController@search');
    Route::get('/explores', 'front\FrontController@addCityDetails');
    Route::get('/show-result', 'front\FrontController@showResult');
    Route::post('/show-result', 'front\FrontController@showResult');
    Route::get('/show-result/show-detail/{id}', 'front\FrontController@showDetails');
    Route::post('/show-result/show-detail', 'front\FrontController@showDetail');

    //register
    Route::get('/register', 'front\FrontController@getVisitor');
    Route::post('/addvisitor', 'front\FrontController@storeVisitor');
    Route::get('/visitor', 'front\FrontController@indexvisitor');

    //upload visitor
    Route::get('/visitor-product', 'front\FrontPropertyController@indexfront')->name('visitor-product');
    Route::get('/createPropertyfront', 'front\FrontPropertyController@createfront')->name('createPropertyfront');
    Route::post('/storePropertysfront', 'front\FrontPropertyController@storefront')->name('storePropertyfront');
    Route::get('/getAvailablePropertyfront', 'front\FrontPropertyController@getAvailablePropertyfront')->name('getAvailablePropertyfront');
    Route::post('/propertyImageUploadfront', 'front\FrontPropertyController@propertyImageUploadfront')->name('propertyImageUploadfront');

    Route::get('/profile','front\FrontPropertyController@index')->name('profile');


});





// Route::get('/system','admin\LoginController@Index')->name("system");

// Route::post('/system/create-step2','admin\LoginController@postCreateStep2')->name("step2");
// Route::get('/system/create-step2','admin\LoginController@CreateStep2');

// Route::post('/system','admin\LoginController@store');



Route::group(['prefix' => 'system'], function () {
    //Create Company

    // Route::post('create-step2', 'auth\LoginController@postCreateStep2')->name("step2");
    // Route::get('create-step2', 'auth\LoginController@CreateStep2');
    // Route::post('', 'auth\LoginController@store');

    //login
    Route::get('', 'auth\LoginController@Index')->name("login");
    Route::post('/login', 'auth\LoginController@login');

});









// Route::group(['prefix' => 'system'], function () {
//     //Create Company

//     Route::post('create-step2', 'auth\LoginController@postCreateStep2')->name("step2");
//     Route::get('create-step2', 'auth\LoginController@CreateStep2');
//     Route::post('', 'auth\LoginController@store');

//     //login
//     Route::get('', 'auth\LoginController@Index')->name("login");
//     Route::post('/login', 'auth\LoginController@login');
// });




Route::group(['prefix' => 'system', 'middleware' => 'auth'], function () {


    //Login

    Route::get('logout', 'auth\LoginController@logout');

    //Dashboard
    Route::get('dashboard', 'admin\DashboardController@index')->name('dashboard');

    //Staff
    Route::get('staff/{trash?}', 'admin\StaffController@index');
    Route::get('createStaff', 'admin\StaffController@create');
    Route::post('storeStaff', 'admin\StaffController@store');
    Route::get('editStaff/{id}', 'admin\StaffController@edit');
    Route::post('updateStaff/{id}', 'admin\StaffController@update');
    Route::get('/showStaff/{id}/', 'admin\StaffController@show')->name('showStaff');
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
    Route::get('payment', 'admin\PaymentController@index')->name('payment');
    Route::get('createPaymentBook/{id?}', 'admin\PaymentController@createPaymentBook')->name('createPaymentBook');
<<<<<<< HEAD
    Route::get('getDetailList/{id}', 'admin\PaymentController@getListBookingDetail');
=======
    Route::get('getDetailList/{id}','admin\PaymentController@getListBookingDetail');
>>>>>>> cf4ddb442e2ec22a0993d79667804307845fa3de
    Route::get('createPaymentInstallment', 'admin\PaymentController@createPaymentInstallment');
    Route::get('viewPaymentInstallment/{id}', 'admin\PaymentController@viewPaymentInstallment')->name('viewPaymentInstallment');
    Route::get('viewPaymentContractDeposit/{id}', 'admin\PaymentController@viewPaymentContractDeposit')->name('viewPaymentContractDeposit');
    Route::post('storePaymentInstallment', 'admin\PaymentController@storePaymentInstallment')->name('storePaymentInstallment');
    Route::post('storePaymentBooking', 'admin\PaymentController@storePaymentBooking')->name('storePaymentBooking');

    //Schedule
    Route::get('schedule', 'admin\InstallScheduleController@index')->name('schedule');
    Route::post('storeSchedule', 'admin\InstallScheduleController@store')->name('storeSchedule');
    Route::get('paymentSchedule/{id}', 'admin\InstallScheduleController@paymentSchedule')->name('paymentSchedule');
    Route::get('show/{id}', 'admin\InstallScheduleController@show')->name('showSchedule');
    Route::get('test', 'admin\InstallScheduleController@test')->name('test');


    //Contract
    Route::get('contract', 'admin\ContractController@index')->name('contract');
    Route::get('createContract', 'admin\ContractController@create');
    Route::post('storeContract', 'admin\ContractController@store')->name('storeContract');
    Route::get('editContract/{id}', 'admin\ContractController@edit');

    //Book
    Route::get('book', 'admin\BookController@index')->name('book');
    Route::get('createBook', 'admin\BookController@create')->name('createBook');
    Route::get('getDetailBook/{id}', 'admin\BookController@getDetailBook');
    Route::post('storeBook', 'admin\BookController@store')->name('storeBook');
    Route::get('editBook/{id}', 'admin\BookController@edit')->name('editBook');

    //Project
    Route::get('project', 'admin\ProjectController@index')->name('project');
    Route::get('createProject', 'admin\ProjectController@create');
    Route::post('storeProject/', 'admin\ProjectController@store');
    Route::get('editProject/{id}', 'admin\ProjectController@edit');
    Route::post('updateProject/{id}', 'admin\ProjectController@update');

    //cities
    Route::get('addcities', 'admin\CityController@index');
    Route::get('destroy/{id}', 'admin\CityController@destroy');
    Route::get('cities', 'admin\CityController@create');
    Route::POST('storecity', 'admin\CityController@store');
    Route::get('editCity/{id}', 'admin\CityController@edit');
    Route::post('updateCity/{id}', 'admin\CityController@update');

    //state_province

    Route::get('viewstatprovince', 'admin\StateOrProvinceController@index');
    Route::get('destroys/{id}', 'admin\StateOrProvinceController@destroy');
    Route::get('addstateprovince', 'admin\StateOrProvinceController@create');
    Route::POST('storestate', 'admin\StateOrProvinceController@store');
    Route::get('editstateprovince/{id}', 'admin\StateOrProvinceController@edit');
    Route::post('updatestateprovince/{id}', 'admin\StateOrProvinceController@update');

    //LocationInfo

    Route::get('viewlocation', 'admin\LocationinfoController@index');
    Route::get('destroy/{id}', 'admin\LocationinfoController@destroy');
    Route::get('addlocation', 'admin\LocationinfoController@create');
    Route::POST('storelocation', 'admin\LocationinfoController@store');
    Route::get('editLocation/{id}', 'admin\LocationinfoController@edit');
    Route::post('updateLocation/{id}', 'admin\LocationinfoController@update');





    //Property
    Route::get('property', 'admin\PropertyController@index')->name('property');
    Route::get('createProperty', 'admin\PropertyController@create');
    Route::post('storeProperty', 'admin\PropertyController@store')->name('storeProperty');
    Route::get('getAvailableProperty', 'admin\PropertyController@getAvailableProperty')->name('getAvailableProperty');
    Route::post('propertyImageUpload', 'admin\PropertyController@propertyImageUpload')->name('propertyImageUpload');
});
