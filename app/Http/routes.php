<?php

use Illuminate\Support\Facades\Request;

$s = 'public.';
 Route::get('/',         ['as' => $s . 'home',   'uses' => 'PagesController@getHome']);

$a = 'auth.';
Route::get('/login',            ['as' => $a . 'login',          'uses' => 'Auth\AuthController@getLogin']);
Route::post('/login',           ['as' => $a . 'login-post',     'uses' => 'Auth\AuthController@postLogin']);
Route::get('/register',         ['as' => $a . 'register',       'uses' => 'Auth\AuthController@getRegister']);
Route::post('/register',        ['as' => $a . 'register-post',  'uses' => 'Auth\AuthController@postRegister']);
Route::get('/password',         ['as' => $a . 'password',       'uses' => 'Auth\PasswordResetController@getPasswordReset']);
Route::post('/password',        ['as' => $a . 'password-post',  'uses' => 'Auth\PasswordResetController@postPasswordReset']);
Route::get('/password/{token}', ['as' => $a . 'reset',          'uses' => 'Auth\PasswordResetController@getPasswordResetForm']);
Route::post('/password/{token}',['as' => $a . 'reset-post',     'uses' => 'Auth\PasswordResetController@postPasswordResetForm']);

Route::get('/verify',         ['as' => $a . 'verify',       'uses' => 'Auth\AuthController@getVerify']);
Route::post('/verify',        ['as' => $a . 'verify-post',  'uses' => 'Auth\AuthController@postVerify']);

Route::get('register/verify/{confirmationCode}', ['as' => $a. 'confirmation_path', 'uses' => 'Auth\AuthController@confirm']);


$s = 'social.';
Route::get('/social/redirect/{provider}',   ['as' => $s . 'redirect',   'uses' => 'Auth\AuthController@getSocialRedirect']);
Route::get('/social/handle/{provider}',     ['as' => $s . 'handle',     'uses' => 'Auth\AuthController@getSocialHandle']);

Route::group(['prefix' => 'admin', 'middleware' => 'auth:administrator'], function()
{
    $a = 'admin.';
    Route::get('/', ['as' => $a . 'home', 'uses' => 'AdminController@getHome']);
});

Route::group(['prefix' => 'user', 'middleware' => 'auth:user'], function()
{
    $a = 'user.';
    Route::get('/', ['as' => $a . 'home', 'uses' => 'UserController@getHome']);
});

Route::group(['middleware' => 'auth:all'], function()
{
    $a = 'authenticated.';
    Route::get('/logout', ['as' => $a . 'logout', 'uses' => 'Auth\AuthController@getLogout']);
});

Route::get('/terms',                ['as' => 'terms',           'uses' => 'ReadersController@getTNC']);
Route::get('/privacy',              ['as' => 'privacy',         'uses' => 'ReadersController@getPrivacyPolicy']);
Route::get('/help',                 ['as' => 'help',            'uses' => 'ReadersController@getHelp']);

Route::resource('profiles', 'ProfileController');
Route::post('/changepass',   ['as' => 'changepass',   'uses' => 'ProfileController@postUserPasswordChange']);

Route::post('/setdefault',   ['as' => 'setdefault',   'uses' => 'UserController@setDefaultApartment']);

// Apartments
Route::resource('apartments', 'ApartmentController');
Route::get('/my-apartments',            ['as' => 'my-apartments',           'uses' => 'ApartmentController@getApprovedApartments']);
Route::get('/associate/{id}',           ['as' => 'associate',               'uses' => 'ApartmentController@associateApartment']);
Route::patch('/set-default/{id}',       ['as' => 'set-default',             'uses' => 'ApartmentController@setDefaultApartment']);
Route::post('/apartment-userinfo',      ['as' => 'post-apartment-userinfo',   'uses' => 'ApartmentController@storeApartmentUserInfo']);

Route::resource('members', 'AdduserController');
Route::resource('polls', 'PollingController');
Route::post('/voteup',     ['as' => 'voteup',       'uses' => 'PollingController@voteUp']);
Route::post('/votedown',   ['as' => 'votedown',     'uses' => 'PollingController@voteDown']);


Route::get('/accept/{id}',           ['as' => 'accept',               'uses' => 'AdminController@acceptAddRequest']);
Route::get('/reject/{id}',           ['as' => 'reject',               'uses' => 'AdminController@rejectAddRequest']);
Route::patch('/setflatfloor/{id}',   ['as' => 'setflatfloor',         'uses' => 'AdminController@update']);

Route::resource('bank', 'BankController');
Route::get('/linkBank/{id}',['as' => 'linkBank',    'uses' => 'BankController@linkBank']);
Route::get('/searchbank',['as' => 'searchbank',     'uses' => 'BankController@searchbank']);


// API
get('api/messages', function() {
    return Message::all();
});
post('api/messages', function() {
    return Message::create(Request::all());
});

// Image Uploader
//Route::get('/complaint', ['as' => 'complaint', 'uses' => 'ImageController@getUpload']);
Route::post('complaint', ['as' => 'complaint-post', 'uses' =>'ImageController@postUpload']);
Route::post('complaint/delete', ['as' => 'complaint-remove', 'uses' =>'ImageController@deleteUpload']);

Route::resource('classifieds', 'ClassifiedController');

Route::resource('complaints', 'ComplaintController');
Route::get('/timeline',                ['as' => 'timeline',           'uses' => 'ComplaintController@getTimeline']);

Route::resource('visitors', 'VisitorController');


// Accounting Controllers


Route::resource('crm', 'CrmController');

Route::resource('deposit', 'DepositController');
Route::resource('expense', 'ExpenseController');
Route::resource('transfer', 'TransferController');

Route::get('/viewtransaction',                  ['as' => 'viewtransaction', 'uses' => 'TransactionController@getTransactions']);
Route::get('/viewspecifictransaction/{id}',     ['as' => 'viewspecifictransaction', 'uses' => 'TransactionController@getSpecificTransactions']);
Route::get('/balance',                          ['as' => 'balance', 'uses' => 'TransactionController@getBalanceSheet']);

Route::resource('invoice', 'InvoiceController');
Route::resource('rinvoice', 'RecurringinvoiceController');
Route::resource('quote', 'QuoteController');

Route::resource('bankncash', 'BankncashController');
Route::get('/accbal', ['as' => 'accbal', 'uses' => 'BankncashController@getAccountBalance']);

Route::resource('staffs', 'StaffController');
Route::resource('inventory', 'InventoryController');
Route::resource('asset', 'AssetController');
Route::resource('product', 'ProductController');
Route::resource('service', 'ServiceController');
Route::resource('tax', 'TaxController');
Route::resource('category', 'CategoryController');
Route::resource('test', 'TestController');
Route::resource('payment', 'PaymentController');


// Utility Controller
Route::get('/activity',             ['as' => 'activity',    'uses' => 'UtilityController@getActivityLog']);
Route::get('/emaillog',             ['as' => 'emaillog',    'uses' => 'UtilityController@getEmailMessageLog']);

// Report Controller
Route::get('/accstatement',     ['as' => 'accstatement',    'uses' => 'ReportController@getAccountStatementForm']);
Route::post('/accstatement',    ['as' => 'accstatementpost',    'uses' => 'ReportController@postAccountStatement']);
Route::get('/incomereport',     ['as' => 'incomereport',          'uses' => 'ReportController@getIncomeReports']);
Route::get('/expensereport',    ['as' => 'expensereport',         'uses' => 'ReportController@getExpenseReports']);
Route::get('/incomeexpense',    ['as' => 'incomeexpense',   'uses' => 'ReportController@getIncomeVsExpenseReports']);
Route::get('/reportsbydate',    ['as' => 'reportsbydate',   'uses' => 'ReportController@getReportsByDate']);
Route::get('/allincome',        ['as' => 'allincome',       'uses' => 'ReportController@getAllIncome']);
Route::get('/allexpense',       ['as' => 'allexpense',      'uses' => 'ReportController@getAllExpense']);
Route::get('/alltransaction',   ['as' => 'alltransaction',  'uses' => 'ReportController@getAllTransaction']);
