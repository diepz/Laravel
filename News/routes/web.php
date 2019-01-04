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

Route::group(['prefix' => 'new'], function () {
   Route::get('/index', 'NewController@index')->name('news.index');
   Route::get('/create', 'NewController@create')->name('news.create');
   Route::post('/create', 'NewController@store')->name('news.store');
   Route::get('/{id}/edit', 'NewController@edit')->name('news.edit');
   Route::post('/{id}/update', 'NewController@update')->name('news.update');
   Route::post('/{id}/destroy', 'NewController@destroy')->name('news.destroy');
   Route::get('/index', 'NewController@index')->name();
});
