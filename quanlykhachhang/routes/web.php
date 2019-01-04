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


Route::group(['prefix' => 'customer'], function() {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/index', 'CustomerController@index')->name('customer.index');
    Route::post('/create', 'CustomerController@store')->name('customer.create');
    Route::get('/create', 'CustomerController@create')->name('customer.create');
    Route::get('/{id}/edit', 'CustomerController@edit')->name('customer.edit');
    Route::post('/{id}/update', 'CustomerController@update')->name('customer.update');
    Route::get('/{id}/destroy', 'CustomerController@destroy')->name('customer.destroy');
});