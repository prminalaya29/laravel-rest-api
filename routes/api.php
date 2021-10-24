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

//declaramos nuestras rutas

Route::post('/reset', 'ResetController@reset');

Route::get('/balance','BalanceController@show');

Route::post('/event', 'EventController@store');