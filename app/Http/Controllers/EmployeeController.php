<?php
namespace App\Http\Controllers;

use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with('position', 'department')->get();
        return view('employees.index', compact('employees'));
    }

    public function show($id)
    {
        $employee = Employee::with('position', 'department')->findOrFail($id);
        return view('employees.show', compact('employee'));
    }
}