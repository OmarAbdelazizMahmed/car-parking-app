<?php

use App\Http\Controllers\Api\V1\Auth;
use App\Http\Controllers\Api\V1\Vehicles;
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

Route::post('/auth/register', Auth\RegisterController::class);
Route::post('/auth/login', Auth\LoginController::class);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/auth/logout', Auth\LogoutController::class);
    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', [Auth\ProfileController::class, 'show']);
        Route::put('/', [Auth\ProfileController::class, 'update']);
    });
    Route::put('/password', Auth\PasswordUpdateController::class);
    Route::apiResource('vehicles', Vehicles\VehicleController::class);
});
