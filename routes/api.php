<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;
use App\Http\Middleware\CheckService;
use App\Http\Controllers\MondiaPayNotificatonController;

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

Route::middleware(['json'])->prefix('v1')->group(function () {

    Route::controller(SubscriptionController::class)->group(function () {

        Route::post('/subscribe', 'generateLead')->middleware(CheckService::class);
        Route::post('/pin-confirm', 'confirmPin');
        Route::post('/unsubscribe', 'unsubscribe');
    });

    Route::controller(MondiaPayNotificatonController::class)->group(function () {

        Route::post('/notification', 'create');
    });
});

Route::fallback(function () {
    abort(404);
});
