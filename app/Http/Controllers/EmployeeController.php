<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with('position', 'department')->get();
        return view('admin.employees.index', compact('employees'));
    }

    public function show(Employee $employee)
    {
        $employee->load(['position', 'department', 'tasks', 'trainings', 'vacations', 'projectAssignments.position']);
        return view('admin.employees.show', compact('employee'));
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('admin.employees.index')->with('success', 'Працівника видалено');
    }
}