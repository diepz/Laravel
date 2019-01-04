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

Route::group(['prefix' => 'customer'], function ($language) {
    Route::get('/index', 'CustomerController@index')->name('customer.index');
    Route::post('/create', 'CustomerController@store')->name('customer.store');
    Route::get('/create', 'CustomerController@create')->name('customer.create');
    Route::get('/{id}/edit', 'CustomerController@edit')->name('customer.edit');
    Route::post('{id}/update', 'CustomerController@update')->name('customer.update');
    Route::get('/{id}/destroy', 'CustomerController@destroy')->name('customer.destroy');
    Route::get('/{id}/show', 'CustomerController@show')->name('customer.show');
    Route::get('/search', 'CustomerController@search')->name('customer.search');

});


Route::group(['prefix' => 'students'], function () {
    Route::get('/index', 'StudentController@index')->name('students.index');
    Route::get('/create', 'StudentController@create')->name('students.create');
    Route::post('/create', 'StudentController@store')->name('students.store');
    Route::get('/{id}/show', 'StudentController@show')->name('students.show');
    Route::get('/{id}/edit', 'StudentController@edit')->name('students.edit');
    Route::put('/{id}/update', 'StudentController@update')->name('students.update');
    Route::delete('/{id}/delete', 'StudentController@destroy')->name('students.delete');
});
