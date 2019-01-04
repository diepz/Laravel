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

    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/index', 'StudentController@index')->name('student.index');
    Route::post('/create', 'StudentController@store')->name('student.store');
    Route::get('/create', 'StudentController@create')->name('student.create');
    Route::get('/{id}/edit', 'StudentController@edit')->name('student.edit');
    Route::post('/{id}/update', 'StudentController@update')->name('student.update');
    Route::get('/{id}/destroy', 'StudentController@destroy')->name('student.destroy');
    Route::post('/search', 'StudentController@search')->name('student.search');
    Route::post('/check', 'StudentController@checkValidation')->name('student.check');
    Route::post('/upload', 'StudentController@upload')->name('student.upload');
});
