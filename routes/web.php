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

use Illuminate\Support\Facades\Route;

Route::namespace('Auth')->group(function(){

    Route::get('dashboard','AdminAuthController@showDashboard')->name('showDashboard');
    Route::get('create-admin','AdminAuthController@adminForm')->name('adminForm');
    Route::post('create-admin','AdminAuthController@createAdmin')->name('createAdmin');
    Route::get('login','AdminAuthController@loginForm')->name('loginForm');
    Route::post('login','AdminAuthController@adminLoginProcess')->name('adminLoginProcess');

});










Route::namespace('Auth')->group(function(){

    Route::get('/','UserAuthController@showLandPage')->name('showLandPage');
    Route::get('add-user-form','UserAuthController@addUserForm')->name('addUserForm');
    Route::post('add-user-form','UserAuthController@createUser')->name('createUser');
    Route::get('user-login','UserAuthController@userLogin')->name('userLogin');
    Route::post('user-login','UserAuthController@userLoginProcess')->name('userLoginProcess');
    Route::get('user-logout','UserAuthController@userLogout')->name('userLogout');

});



Route::namespace('admin')->group(function () {

    Route::get('create-post','AdminController@postForm')->name('postForm');

});

Route::namespace('user')->group(function () {



});