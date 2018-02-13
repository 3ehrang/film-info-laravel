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

Route::get('v1/films', 'Api\V1\filmController@index');
Route::post('v1/films', 'Api\V1\filmController@store');
Route::get('v1/films/{id}', 'Api\V1\filmController@show');
Route::put('v1/films/{id}', 'Api\V1\filmController@update');
Route::delete('v1/films/{id}', 'Api\V1\filmController@delete');


