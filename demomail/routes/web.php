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

Route::get('/home', function () {
    return view('house');
});
Route::group(['prefix' => 'posts'], function () {
   route::get('/', 'PostsController@index')->name('posts.index');
   route::get('/create', 'PostsController@create')->name('posts.create');
   route::post('/create', 'PostsController@store')->name('posts.store');
   route::get('/{id}/view', 'PostsController@view')->name('posts.view');
   route::get('/{id}/edit', 'PostsController@edit')->name('posts.edit');
   route::post('/{id}/edit', 'PostsController@update')->name('posts.update');
   route::get('/{id}/delete', 'PostsController@destroy')->name('posts.destroy');
//   route::get('/search', 'PostsController@seacrh')->name('posts.search');

});
Route::get('/', 'MailController@home');
Route::post('send/email','MailController@sendemail');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
