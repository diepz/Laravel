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


Route::group(['prefix' => 'students'], function () {
    Route::get('/index', 'StudentController@index')->name('students.index');
    Route::get('/create', 'StudentController@create')->name('students.create');
    Route::post('/create', 'StudentController@store')->name('students.store');
    Route::get('/{id}/show', 'StudentController@show')->name('students.show');
    Route::get('/{id}/edit', 'StudentController@edit')->name('students.edit');
    Route::put('/{id}/update', 'StudentController@update')->name('students.update');
    Route::delete('/{id}/delete', 'StudentController@destroy')->name('students.delete');
});