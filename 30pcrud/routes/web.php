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

//Route::resource('library', 'LibaryController');

Route::group(['prefix' => 'book'], function () {
   Route::get('/index', 'LibraryController@index')->name('book.index');
   Route::get('/create', 'LibraryController@create')->name('book.create');
   Route::post('/create', 'LibraryController@store')->name('book.store');
   Route::get('/{id}/edit', 'LibraryController@edit')->name('book.edit');
   Route::post('/{id}/update', 'LibraryController@update')->name('book.update');
   Route::get('/{id}/show', 'LibraryController@show')->name('book.show');
   Route::get('/{id}/destroy', 'LibraryController@destroy')->name('book.destroy');
});