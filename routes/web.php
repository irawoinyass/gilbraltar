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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'MainController@index')->name('main.home');
Route::get('/home', 'MainController@index')->name('main.home');
    Route::get('/aboutus', 'MainController@aboutus')->name('main.aboutus');
Route::get('/contactus', 'MainController@contactus')->name('main.contactus');
Route::post('/contact', 'MainController@contact')->name('main.contact');
Route::get('/Cloud Solutions', 'MainController@cloud')->name('main.cloud');
Route::get('/Training', 'MainController@training')->name('main.training');
Route::get('/IT Support and Service Management', 'MainController@IT')->name('main.IT');
Route::get('/Operations and Support Professional Services', 'MainController@operations')->name('main.operations');
Route::get('/Network Engineering', 'MainController@network')->name('main.network');
Route::get('/careers', 'MainController@careers')->name('main.careers');
Route::get('/Business Consulting', 'MainController@consult')->name('main.consult');















    //Super Admin



Route::group(['prefix'=>'superadmin'], function() {

// Login Routes...
Route::get('login', ['as' => 'superadmin.login', 'uses' => 'SuperAdminAuth\LoginController@showLoginForm']);

 Route::post('login', ['uses' => 'SuperAdminAuth\LoginController@login']);

 Route::post('logout', ['as' => 'superadmin.logout', 'uses' => 'SuperAdminAuth\LoginController@logout']);


// Password Reset Routes...
Route::get('password/reset', ['as' => 'superadmin.password.request', 'uses' => 'SuperAdminAuth\ForgotPasswordController@showLinkRequestForm']);


Route::post('password/email', ['as' => 'superadmin.password.email', 'uses' => 'SuperAdminAuth\ForgotPasswordController@sendResetLinkEmail']);


Route::get('password/reset/{token}', ['as' => 'superadmin.password.reset', 'uses' => 'SuperAdminAuth\ResetPasswordController@showResetForm']);


Route::post('password/reset', ['uses' => 'SuperAdminAuth\ResetPasswordController@reset']);



//Dashboard
Route::get('dashboard', ['as' => 'superadmin.dashboard', 'uses' => 'SuperAdminDashboardController@index']);
Route::get('resetpassword', ['as' => 'superadmin.resetpassword', 'uses' => 'SuperAdminDashboardController@resetpassword']);
Route::post('passwordreset', ['as' => 'superadmin.passwordreset', 'uses' => 'SuperAdminDashboardController@passwordreset']);

Route::get('slide', ['as' => 'superadmin.slide', 'uses' => 'SlideController@index']);
Route::post('uploadslide', ['as' => 'superadmin.uploadslide', 'uses' => 'SlideController@upload']);
Route::post('deleteslide', ['as' => 'superadmin.deleteslide', 'uses' => 'SlideController@delete']);
Route::get('editslide/{id}', ['as' => 'superadmin.editslide', 'uses' => 'SlideController@edit']);
Route::post('updateslide', ['as' => 'superadmin.updateslide', 'uses' => 'SlideController@update']);


Route::get('testimony', ['as' => 'superadmin.testimony', 'uses' => 'TestimonyController@index']);
Route::post('uploadtestimony', ['as' => 'superadmin.uploadtestimony', 'uses' => 'TestimonyController@upload']);
Route::post('deletetestimony', ['as' => 'superadmin.deletetestimony', 'uses' => 'TestimonyController@delete']);
Route::get('edittestimony/{id}', ['as' => 'superadmin.edittestimony', 'uses' => 'TestimonyController@edit']);
Route::post('updatetestimony', ['as' => 'superadmin.updatetestimony', 'uses' => 'TestimonyController@update']);



});

