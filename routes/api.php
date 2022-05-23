<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

#provinces
#regencies

Route::get('register/check', 'Auth\RegisterController@check')->name('api-register-check');
Route::get('regions', 'API\LocationController@regions')->name('api-regions');
Route::get('cities/{region_id}', 'API\LocationController@cities')->name('api-cities');
