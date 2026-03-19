<?php

use App\Http\Controllers\Admin\EmployeeController;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/employee', [EmployeeController::class, 'index']);
Route::get('/employee/{id}', [EmployeeController::class, 'show']);