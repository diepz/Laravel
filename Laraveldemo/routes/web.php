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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('test-route', function () {
    return 'Xin chao cac ban';
});

Route::get('/', function () {
    return view('greeting', ['name' => 'Diepz'], ['age' => '18']);
});
//
//Route::get('/age', function () {
//    return view('greeting', ['age' => 'abc']);
//});

//Route::get('for', 'Photos\AdminController@method');
//
//
//Route::get('user/{id}', 'ShowProfile');

//Route::resource('photo', 'PhotoController');
Route::get('controller/{FistNumber}/{SecondNumber}' , 'MyFistController@getController');
//Route::get('user/{id}', 'UserController@show');
Route::get('view', 'MyFistController@getView');