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

Route::group(['prefix' => 'student'], function () {
    Route::get('/', 'StudentController@index')->name('student.index');
    Route::post('/create', 'StudentController@store')->name('student.store');
    Route::get('/create', 'StudentController@create')->name('student.create');
    Route::get('/{id}/edit', 'StudentController@edit')->name('student.edit');
    Route::post('/{id}/update', 'StudentController@update')->name('student.update');
    Route::get('/{id}/destroy', 'StudentController@destroy')->name('student.destroy');
    Route::get('/search', 'StudentController@search')->name('student.search');
});
