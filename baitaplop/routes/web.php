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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'customer'], function (){
    Route::get('/index', 'CustomersController@index')->name('customer.index');
    Route::get('/create', 'CustomersController@create')->name('customer.create');
    Route::post('/create', 'CustomersController@store')->name('customer.store');
    Route::get('/edit', 'CustomersController@edit')->name('customer.edit');
    Route::post('/update', 'CustomersController@update')->name('customer.update');
    Route::get('/destroy', 'CustomersController@destroy')->name('customer.destroy');
});