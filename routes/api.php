<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
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


Route::post('/temperatures', [ApiController::class, 'store']);
Route::get('/temperatures', [ApiController::class, 'index']);
Route::get('/time', [ApiController::class, 'time']);
Route::get('/fanStatus', [ApiController::class, 'fanStatus']);
Route::get('/lastTemp', [ApiController::class, 'getLastValue']);
