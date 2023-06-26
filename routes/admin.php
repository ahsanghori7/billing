<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LookupController;
use App\Http\Controllers\Admin\SubserviceController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\Admin\MessagesController;
use App\Http\Controllers\Admin\OperatorController;
use App\Http\Controllers\Admin\IntegrationController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Middleware\Cors;

/*
|--------------------------------------------------------------------------
| Admin Panel API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin Panel API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::middleware([Cors::class])->group(function () {

    Route::controller(AdminController::class)->group(function () {
        Route::post('/login', 'login');
    });

    Route::controller(LookupController::class)->group(function () {
        Route::get('/lookup', 'index');
    });

    Route::prefix('subservice')->controller(SubserviceController::class)->group(function () {
        Route::get('/list', 'index');
        Route::post('/create', 'store');
        Route::put('/update/{id}', 'update');
        Route::delete('/delete/{id}', 'destroy');
    });

    Route::controller(SubscriberController::class)->group(function () {
        Route::get('/subscriber-list', 'index');
    });

    Route::prefix('messages')->controller(MessagesController::class)->group(function () {
        Route::get('/list', 'getMessages');
        Route::post('/create', 'store');
        Route::put('/update/{id}', 'update');
        Route::delete('/delete/{id}', 'destroy');
    });

    Route::prefix('operator')->controller(OperatorController::class)->group(function () {
            Route::get('/list', 'index');
            Route::post('/create', 'store');
            Route::put('/update/{id}', 'update');
            Route::delete('/delete/{id}', 'destroy');
    });

    Route::prefix('integration')->controller(IntegrationController::class)->group(function () {
        Route::get('/list', 'index');
        Route::get('/single/{id}', 'show');
        Route::post('/create', 'store');
        Route::put('/update/{id}', 'update');
        Route::delete('/delete/{id}', 'destroy');
    });

    Route::prefix('dashboard')->controller(DashboardController::class)->group(function () {
        Route::get('/subcriber-by-country', 'subcriberByCountry');
        Route::get('/latest-leads', 'latestLeads');
    });
});
