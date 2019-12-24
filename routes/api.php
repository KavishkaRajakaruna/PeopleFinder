<?php

use Illuminate\Http\Request;
use App\Http\Controllers\personController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!;

*/
Route::get('/person/{person}','personController@show');
Route::apiResource('/person', 'personController');
