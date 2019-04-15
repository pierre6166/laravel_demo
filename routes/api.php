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

Route::post('/v1/user/creat', 'empolyee@creatEmpolyee');
Route::post('/v1/user/delete', 'empolyee@deleteEmpolyee');
Route::post('/v1/user/pwd/change', 'empolyee@changeEmpolyeePassword');
Route::post('//v1/user/pwd/verify', 'empolyee@verifyEmpolyeePassword');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
