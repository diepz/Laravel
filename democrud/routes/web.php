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

Route::group(['prefix' => 'task'], function () {
   Route::get('/index', 'TaskController@index')->name('tasks.index');
   Route::get('/create', 'TaskController@create')->name('tasks.create');
   Route::post('/create', 'TaskController@store')->name('tasks.store');
   Route::get('/{id}/show', 'TaskController@show')->name('tasks.show');
   Route::get('/{id}/edit', 'TaskController@edit')->name('tasks.edit');
   Route::post('/{id}/update', 'TaskController@update')->name('tasks.update');
   Route::get('/{id}/destroy', 'TaskController@destroy')->name('tasks.destroy');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('welcome');
});
