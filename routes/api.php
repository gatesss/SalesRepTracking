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

Route::post('/register', 'Api\AuthController@register');
Route::post('/login', 'Api\AuthController@login');


Route::get('/visitingplancustomer/get', 'VisitingPlanCustomerController@load');
Route::get('/customer/get', 'CustomerController@load');
Route::get('/employe/get', 'EmployeeController@load');
Route::get('/lead/get', 'LeadController@load');
Route::get('/visitingleadcustomer/get', 'VisitingLeadCustomerController@load');
Route::get('/visitingplanlead/get', 'VisitingPlanLeadController@load');
Route::get('/visitingrealisasicustomer/get', 'VisitingRealisasiCustomerController@load');