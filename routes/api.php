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
Route::get('members', 'MemberController@index');
Route::get('members/{member}', 'MemberController@show');
Route::post('members', 'MemberController@store');
Route::put('members/{member}', 'MemberController@update');
Route::delete('members/{member}', 'MemberController@delete');
Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');