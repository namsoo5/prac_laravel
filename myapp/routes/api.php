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

#라우트이름 home생성
Route::get('/h', [
    'as' => 'home',
    function () {
        return '내이름은 김남수!';
    }
]);

Route::get('/{name}', function ($name) {
    return $name;
});

#생성해놓은 라우터의이름을이용해서 리다이렉트
Route::get('/home', function () {
    return redirect(route('home'));
});