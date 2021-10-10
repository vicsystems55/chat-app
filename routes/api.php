<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ApiAuthController;

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


Route::group(['middleware' => ['auth:sanctum']], function(){

    Route::get('/messages', [MessageController::class, 'messages']);

    Route::get('/create_message', [MessageController::class, 'create_message']);

});

Route::get('/fire_events', [MessageController::class, 'fire_events']);

Route::post('/register', [ApiAuthController::class, 'register']);

Route::post('/login', [ApiAuthController::class, 'login']);