<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




Route::get('/dashboard','AdminsController@index');
Route::get('/user/{id?}', 'AdminsController@show');
Route::get('/user/{id?}/change', 'AdminsController@assignRole');


Route::get('test', function() {
    dd (DB::connection()->getPdo());
});

//Roles
Route::get('/roles/add', 'RolesController@create');
Route::post('/roles/add', 'RolesController@store');

//Permission
Route::get('/permission/add', 'PermissionsController@create');
Route::post('/permission/add', 'PermissionsController@store');

//Hompage
// Route::get('/','PagesController@homepage' );

//Login
Route::get('/', 'Auth\AuthController@getLogin');
Route::post('/', 'Auth\AuthController@postLogin');

//Registration
Route::get('users/register', 'Auth\AuthController@getRegister');
Route::post('users/register', 'Auth\AuthController@postRegister');

//User
Route::get('/users', 'UsersController@index');

//Logout
Route::get('users/logout', 'Auth\AuthController@getLogout');


//Coffee
Route::get('/coffee/add', 'CoffeeController@create');
Route::post('/coffee/add', 'CoffeeController@store');

//Pastry
Route::get('/pastry/add', 'PastrysController@create');
Route::post('/pastry/add', 'PastrysController@store');

//Customer
Route::get('/customers', 'CustomersController@index');
Route::get('/customer/add', 'CustomersController@create');
Route::post('/customer/add', 'CustomersController@store');
Route::get('/customer/{id?}', 'CustomersController@show');
Route::get('/customer/{id?}/edit', 'CustomersController@edit');
Route::post('/customer/{id?}/edit', 'CustomersController@update');
Route::post('/customer/{id?}/delete', 'CustomersController@destroy');

//Order
Route::get('/order/index', 'OrdersController@index');
Route::get('/order/new', 'OrdersController@create');
Route::post('/order/new', 'OrdersController@store');
Route::get('/order/{id?}', 'OrdersController@show');
Route::get('/order/{id?}/edit', 'OrdersController@edit');
Route::post('/order/{id?}/edit', 'OrdersController@update');
Route::post('/order/{id?}/delete','OrdersController@destroy');

//Chart
Route::get('api', 'StatsController@getApi');
