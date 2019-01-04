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


Route::group(['prefix' => 'student'] ,function (){
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/index', 'StudentsController@index')->name('student.index');
    Route::post('/create', 'StudentsController@store')->name('student.store');
    Route::get('/create', 'StudentsController@create')->name('student.create');
    Route::get('/{id}/edit', 'StudentsController@edit')->name('student.edit');
    Route::post('/{id}/update', 'StudentsController@update')->name('student.update');
});