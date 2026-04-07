<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/about', [MainController::class, 'about']);


Route::get('/employees', [EmployeeController::class, 'index']);
Route::get('/employees/{id}', [EmployeeController::class, 'show']);
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/projects/create', [ProjectController::class, 'create']);
Route::post('/projects', [ProjectController::class, 'store']);
Route::get('/projects/{id}', [ProjectController::class, 'show']);


Route::get('/dashboard', function () {
    return redirect('/employees');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    
    Route::resource('employees', \App\Http\Controllers\Admin\EmployeeController::class)
        ->only(['index', 'show', 'destroy', 'create', 'store']);

    Route::resource('projects', \App\Http\Controllers\Admin\ProjectController::class)
        ->only(['index', 'create', 'store', 'show', 'destroy']);
});

require __DIR__.'/auth.php';