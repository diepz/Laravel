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

//Route::get('calculate/{number1}{number2}', 'Calculate@getCalculate');
//Route::get('/', 'getCalculate@index');
Route::get('/total', function () {
    return view('demoa');
});

Route::get('calculate/{FistNumber}/+/{SecondNumber}' , 'MyCalculate@getCalculate')->n;
Route::get('calculate/{FistNumber}/-/{SecondNumber}' , 'MyCalculate1@getCalculate1');
Route::get('calculate/{FistNumber}/*/{SecondNumber}' , 'MyCalculate2@getCalculate2');
Route::get('calculate/{FistNumber}/%/{SecondNumber}' , 'MyCalculate3@getCalculate3');

