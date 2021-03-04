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

//********** route pour le plan d'engagement par UA *************************//

Route::get("Planengaua","planenga_uaController@index");
Route::post("Planengaua","planenga_uaController@store");
Route::get("Planengaua/{id}","planenga_uaController@show");
Route::get("Planengaua/{id}","planenga_uaController@edit");
Route::delete("Planengaua/{id}","planenga_uaController@destroy");
Route::put("Planengaua/{id}","planenga_uaController@update");
