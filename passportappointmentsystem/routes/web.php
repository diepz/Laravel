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
Route::group(['prefix' => 'student'], function () {
    Route::get('/', 'StudentController@index')->name('student.index');
    Route::post('/create', 'StudentController@store')->name('student.store');
    Route::get('/create', 'StudentController@create')->name('student.create');
    Route::get('/edit', 'StudentController@edit')->name('student.edit');
    Route::post('/update', 'StudentController@update')->name('student.update');
});