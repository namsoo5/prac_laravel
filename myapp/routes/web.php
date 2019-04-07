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


#라우트이름 home생성
Route::get('/h', [
    'as' => 'home',
    function () {
        return '내이름은 김남수!';
    }
]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{name}', function ($name) {
    return $name;
});

#생성해놓은 라우터의이름을이용해서 리다이렉트
Route::get('/home', function () {
    return redirect(route('home'));
});

