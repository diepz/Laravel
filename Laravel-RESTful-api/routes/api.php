<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/index', function (){
    return response()->json(['greeting' => 'hello']);
});
Route::post('/index', function (Request $request){

    return response()->json(['greeting' => 'hello' . ' '.$request->name]);
});
Route::post('/index/{name}', function ($name){

    return response()->json(['greeting' => 'hello' . $name]);
});
