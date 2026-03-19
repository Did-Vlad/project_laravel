<?php

use App\Http\Controllers\Api\EmployeeController;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResources([
    'employees' => EmployeeController::class
]);