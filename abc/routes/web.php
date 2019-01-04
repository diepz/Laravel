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

Route::group(['prefix' => 'customer'], function () {
    Route::get('/list', 'CustomersController@index')->name('customer.index');
    Route::post('/create', 'CustomersController@store')->name('customer.create');
    Route::get('/create', 'CustomersController@create')->name('customer.store');
    Route::get('/{id}/edit', 'CustomersController@edit')->name('customer.edit');
    Route::get('/destroy', 'CustomersController@destroy')->name('customer.destroy');
    Route::post('/{id}/update', 'CustomersController@update')->name('customer.update');
});