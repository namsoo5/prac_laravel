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
Route::get('/my/name', [
    'as' => 'home',
    function () {
        return '내이름은 김남수!';
    }
]);

#Route::get('/{name}', function ($name) {
#    return $name;
#});

#생성해놓은 라우터의이름을이용해서 리다이렉트
Route::get('/home/main', function () {
    return redirect(route('home'));
});

Route::get('/test/list', function () {
    return response()->json([
        'name' => "namsoo",
        'message' => config('app.name').' API',

    ], 200, [], JSON_PRETTY_PRINT);
});

#controller사용
#Route:get('jeahee', 'WelcomeControler@jeahee');
