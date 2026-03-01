<?php

namespace App\Http\Controllers;

use App\Models\Employee;

class EmployeeController extends Controller
{
    // Каталог співробітників
    public function index()
    {
        $employees = Employee::with('position')->get();

        return view('employees.index', compact('employees'));
    }

    // Один співробітник
    public function show($id)
    {
        $employee = Employee::with('position')->find($id);

        if (!$employee) {
            return "Співробітника не знайдено";
        }

        return view('employees.show', compact('employee'));
    }
}