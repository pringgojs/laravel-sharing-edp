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

Route::get('delete/{id}', 'BlogController@destroy'); // xxx.com/api/blog
Route::post('update', 'BlogController@update'); // xxx.com/api/blog
Route::post('blog', 'BlogController@store'); // xxx.com/api/blog
Route::get('blog/{id}', 'BlogController@show'); // xxx.com/api/blog
Route::get('blog', 'BlogController@index'); // xxx.com/api/blog

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
