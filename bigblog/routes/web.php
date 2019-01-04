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
Route::group(['prefix' => 'tasks'], function () {
    Route::get('/','BlogController@index')->name('tasks.index');
    Route::get('/create','BlogController@create')->name('tasks.create');
    Route::post('/create','BlogController@store')->name('tasks.store');
    Route::get('/{id}/edit','BlogController@edit')->name('tasks.edit');
    Route::post('/{id}/edit','BlogController@update')->name('tasks.update');
    Route::get('/{id}/destroy','BlogController@destroy')->name('tasks.destroy');
});