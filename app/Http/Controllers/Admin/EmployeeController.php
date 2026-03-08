<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Position;
use App\Models\Department;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with('position', 'department')->get();
        return view('admin.employees.index', compact('employees'));
    }

    public function create()
    {
        $positions = Position::all();
        $departments = Department::all();
        return view('admin.employees.create', compact('positions', 'departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name'       => 'required|string|max:30',
            'last_name'        => 'required|string|max:30',
            'midl_name'        => 'nullable|string|max:30',
            'gender'           => 'required|in:M,F',
            'phone'            => 'required|regex:/^\+?[0-9]{10,15}$/',
            'email'            => 'required|email|unique:employee,email',
            'hire_date'        => 'required|date',
            'termination_date' => 'nullable|date|after:hire_date',
            'status'           => 'required|in:Активний,Звільнений',
            'position_id'      => 'required|exists:position,id',
            'department_id'    => 'required|exists:department,id',
        ]);

        Employee::create($request->all());

        return redirect()->route('admin.employees.index')
            ->with('success', 'Працівника успішно додано!');
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