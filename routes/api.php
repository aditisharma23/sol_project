<?php

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {
    Route::resource('companies', 'CompaniesController', ['except' => ['create', 'edit']]);
    Route::resource('customer', 'CustomerController', ['except' => ['create', 'edit']]);
    Route::resource('hauler', 'HaulerController', ['except' => ['create', 'edit']]);
    //Route::post('user/check', ['uses' => 'UserController@check']);
    Route::post('user/check', 'UserController@getcheck');
    Route::post('user/login', 'UserController@login');
    Route::post('user/updatepassword/{ic}', 'UserController@updatepassword');
     //Route::controller('user', 'UserController',['getcheck' =>'user.check' ]);
    Route::resource('user', 'UserController');
});
