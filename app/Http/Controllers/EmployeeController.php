<?php

namespace App\Http\Controllers;

use App\Models\Employee;

class EmployeeController extends Controller
{
    // Каталог співробітників
    public function index()
    {
        $employees = Employee::with('Position')->get();

        return view('employees.index', compact('employees'));
    }

    // Один співробітник
 public function show($id)
{
    $employee = Employee::with([
        'tasks',
        'trainings',
        'vacations',
        'projectAssignments.position'
    ])->findOrFail($id);

    return view('employees.show', compact('employee'));
}