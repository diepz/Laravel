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

//Route::get('/greeting/{name?}/{age?}', function ($name = null, $age = null) {
//    if ($name && $age) {
//        echo '<h1>Hello' . ' ' .$name . ' ' . $age . ' ' . 'tuoi' . '!</h1>';
//    } else {
//        echo '<h1>welcome</h1>';
//    }
//
//});
route::get('/', 'UsersController@export')->name('z');


//    Route::get('/login', function () {
//        return view('login');
//    });
//
//    Route::post('/login', function (Illuminate\Http\Request $request) {
//        if ($request->username == 'admin'
//            && $request->password == 'admin') {
//            return view('welcome_admin');
//        }
//            return view('login_error');
//    });


