<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicationController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AuthController;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/medications', [MedicationController::class, 'index']);
    Route::get('/medications/{id}', [MedicationController::class, 'show']);

    Route::get('/customers', [CustomerController::class, 'index']);
    Route::get('/customers/{id}', [CustomerController::class, 'show']);
});

Route::middleware(['auth:sanctum', 'role:owner'])->group(function () {
    Route::post('/medications', [MedicationController::class, 'store']);
    Route::put('/medications/{id}', [MedicationController::class, 'update']);
    Route::patch('/medications/{id}', [MedicationController::class, 'update']);
    Route::delete('/medications/{id}', [MedicationController::class, 'destroy']);

    Route::post('/customers', [CustomerController::class, 'store']);
    Route::put('/customers/{id}', [CustomerController::class, 'update']);
    Route::patch('/customers/{id}', [CustomerController::class, 'update']);
    Route::delete('/customers/{id}', [CustomerController::class, 'destroy']);
});

Route::middleware(['auth:sanctum', 'role:manager'])->group(function () {
    Route::patch('/medications/{id}', [MedicationController::class, 'update']);
    Route::delete('/medications/{id}/soft', [MedicationController::class, 'softDelete']);

    Route::patch('/customers/{id}', [CustomerController::class, 'update']);
    Route::delete('/customers/{id}/soft', [CustomerController::class, 'softDelete']);
});

Route::middleware(['auth:sanctum', 'role:cashier'])->group(function () {
    Route::patch('/medications/{id}', [MedicationController::class, 'update']);

    Route::patch('/customers/{id}', [CustomerController::class, 'update']);
});
