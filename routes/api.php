<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\OrderController;
use App\Http\Controllers\API\SesiController;
use App\Http\Controllers\API\PaketController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function() {
    Route::get('/user', [AuthController::class, 'me']);
    Route::put('/user', [AuthController::class, 'profile']);
    Route::any('/logout', [AuthController::class, 'logout']);

    Route::post('/order', [OrderController::class, 'store']);
    Route::get('/order', [OrderController::class, 'index']);
    Route::get('/order/{sesi}/{tanggal}', [OrderController::class, 'showBySesiAndTanggal']);

    Route::get('/sesi', [SesiController::class, 'index']);
    Route::get('/sesi/{sesi}', [SesiController::class, 'show']);

    Route::get('/paket', [PaketController::class, 'index']);
});

Route::middleware('web')->get('/googlelogin', [AuthController::class, 'googlelogin']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

