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

Route::get("PlanEngagement","PlanEngagementController@index");
Route::post("PlanEngagement","PlanEngagementController@store");
Route::get("PlanEngagement/{id}","PlanEngagementController@show");
Route::get("PlanEngagement/edit/{id}","PlanEngagementController@edit");
Route::delete("PlanEngagement/{id}","PlanEngagementController@destroy");
Route::put("PlanEngagement/{id}","PlanEngagementController@update");
