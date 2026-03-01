<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\ProjectController;

Route::get('/', [MainController::class, 'index']);

Route::get('/about', [MainController::class, 'about']);

Route::get('/employees', [EmployeeController::class, 'index']);

Route::get('/employees/{id}', [EmployeeController::class, 'show']);

Route::get('/projects', [ProjectController::class, 'index']);

Route::get('/projects/create', [ProjectController::class, 'create']);

Route::post('/projects', [ProjectController::class, 'store']);

Route::get('/projects/{id}', [ProjectController::class, 'show']);

// Адмін маршрути
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('employees', \App\Http\Controllers\Admin\EmployeeController::class)
        ->only(['index', 'show', 'destroy']);

    Route::resource('projects', \App\Http\Controllers\Admin\ProjectController::class)
        ->only(['index']);
});