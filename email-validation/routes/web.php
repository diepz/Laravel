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


Route::get('/', 'IndexController@index');


Route::prefix('customer')->group(function () {
    route::get('index', 'CustomerController@index');
    route::get('create', 'CustomerController@create');
    route::get('store', 'CustomerController@store');
    route::get('{id}/show', 'CustomerController@show');
    route::get('{id}/edit', 'CustomerController@edit');
    route::get('{id}/update', 'CustomerController@update');
    route::get('{id}', 'CustomerController@destroy');
});



