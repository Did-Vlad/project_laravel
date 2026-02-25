<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProjectController;

Route::get('/', [MainController::class, 'index']);

Route::get('/about', [MainController::class, 'about']);

Route::get('/employees', [EmployeeController::class, 'index']);

Route::get('/employees/{id}', [EmployeeController::class, 'show']);

Route::get('/projects', [ProjectController::class, 'index']);

Route::get('/projects/create', [ProjectController::class, 'create']);

Route::post('/projects', [ProjectController::class, 'store']);

Route::get('/projects/{id}', [ProjectController::class, 'show']);