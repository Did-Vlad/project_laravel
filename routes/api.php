<?php
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\DepartmentController;
use Illuminate\Support\Facades\Route;

// Публічні GET роути
Route::get('employees', [EmployeeController::class, 'index']);
Route::get('employees/{id}', [EmployeeController::class, 'show']);
Route::get('departments', [DepartmentController::class, 'index']);

// Адмін роути з авторизацією
Route::middleware('auth:sanctum')->group(function () {
    Route::post('employees', [EmployeeController::class, 'store']);
    Route::put('employees/{id}', [EmployeeController::class, 'update']);
    Route::delete('employees/{id}', [EmployeeController::class, 'destroy']);
});