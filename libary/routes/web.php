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
    return view('home');
});
Route::group(['prefix' => 'book'], function () {
    Route::get('/index', 'BookController@index')->name('book.index');
    Route::get('/create', 'BookController@create')->name('book.create');
    Route::post('/create', 'BookController@store')->name('book.store');
    Route::get('/{id}/edit', 'BookController@edit')->name('book.edit');
    Route::post('/{id}/update', 'BookController@update')->name('book.update');
    Route::get('/{id}/destroy', 'BookController@destroy')->name('book.destroy');
    Route::post('/search', 'BookController@search')->name('book.search');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
