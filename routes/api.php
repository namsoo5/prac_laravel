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

Route::get('users','UserController@users');
Route::get('userName/{name}','UserController@userNameCheck');
Route::get('userId/{Id}','UserController@userNameCheck');
Route::post('user','UserController@userStore');
Route::post('userLogin','UserController@userLogin');
Route::DELETE('userDelete','UserController@userDelete');

