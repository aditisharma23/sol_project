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

 Route::get('/', 'Auth\LoginController@showLoginForm');

Route::get('/driver', 'DriverController@index')->name('driver');
Route::get('/hauler', 'DriverController@haulersignup')->name('hauler');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('companies', 'CompaniesController@index')->name('companies.index');
});
Route::group(['middleware' => ['auth'], 'prefix' => 'customer', 'as' => 'customer.'], function () {
	Route::get('/', 'CustomerController@index')->name('customer.index');
	Route::get('/services', 'CustomerController@services')->name('customer.services');
	Route::get('/feedback', 'CustomerController@feedback')->name('customer.feedback');
	Route::get('/pickups', 'CustomerController@pickups')->name('customer.pick-ups');
	Route::get('/invoices', 'CustomerController@invoices')->name('customer.invoices');
	Route::get('/profilesetting', 'CustomerController@profilesetting')->name('profilesetting');
});
