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


Route::group(['middleware' => 'locale'], function() {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    // Hiển thị danh sách bài viết
    Route::get('/posts', 'PostController@index')->name('posts.list');

    // Hiển thị giao diện thêm mới bài viết
    Route::get('/posts/create', 'PostController@create')->name('posts.create');

    // Tạo mới bài viết
    Route::post('/posts/create', 'PostController@store')->name('posts.store');

    // Chuyển đổi ngôn ngữ cho website
    Route::get('change-language/{language}', 'LanguageController@changeLanguage')->name('user.change-language');
});