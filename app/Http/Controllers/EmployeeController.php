<?php

namespace App\Http\Controllers;

use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with('position')->get();
        return view('employees.index', compact('employees'));
    }

    public function show($id)
    {
        $employee = Employee::with([
            'position',
            'department',
            'tasks',
            'trainings',
            'vacations',
            'projectAssignments.position'
        ])->findOrFail($id);

        return view('employees.show', compact('employee'));
    }
}