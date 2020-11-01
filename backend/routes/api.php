<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register','App\Http\Controllers\registerController@register');
Route::post('/login','App\Http\Controllers\loginController@login');
Route::post('/logout','App\Http\Controllers\loginController@logout');
Route::post('/role','App\Http\Controllers\roleController@role');

Route::get('/getDetails/{id}','App\Http\Controllers\loginController@getDetail');
