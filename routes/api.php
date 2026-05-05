<?php

use App\Http\Controllers\Api\EmployeeController;
use Illuminate\Support\Facades\Route;

// 1. Роути, доступні всім авторизованим User та Admin
Route::middleware('auth:sanctum')->group(function () {
    
    // Тільки перегляд списку та одного працівника
    Route::get('employees', [EmployeeController::class, 'index']);
    Route::get('employees/{employee}', [EmployeeController::class, 'show']);

    // 2. Адмін роути
Route::middleware('admin')->group(function () {
Route::post('employees', [EmployeeController::class, 'store']);
Route::put('employees/{employee}', [EmployeeController::class, 'update']);
Route::delete('employees/{employee}', [EmployeeController::class, 'destroy']);
    });
});