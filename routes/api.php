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
Route::get('/portfolio', 'PortfolioController@JsonIndex');
Route::get('/portfolioImage/{portfolio}', 'PortfolioImageController@JsonIndex');
Route::get('/pdportfolio', 'AdPortfolioImageController@JsonIndex');
Route::get('/news', 'NewsController@JsonIndex');
Route::get('/news/{news}', 'NewsController@JsonShow');
Route::get('/lastNews', 'NewsController@JsonLast');

Route::get('/department', 'DepartmentController@JsonIndex');
Route::get('/departmentImage/{department}', 'DepartmentImageController@JsonIndex');

Route::get('services','ServiceController@JsonIndex');

Route::post('/jsonFavoret', 'PortfolioImageController@JsonFavoret');
Route::post('/JsonSearch', 'PortfolioImageController@JsonSearch');
