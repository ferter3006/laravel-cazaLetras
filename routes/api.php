<?php

use App\Http\Controllers\NicknamesController;
use App\Http\Controllers\RakingController;
use App\Models\ranking;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/ranking/{stage}', [RakingController::class, 'index']);
Route::post('/ranking/{stage}', [RakingController::class, 'post']);

Route::get('/nicks/{nik}', [NicknamesController::class, 'get']);
Route::post('/nicks', [NicknamesController::class, 'post']);
