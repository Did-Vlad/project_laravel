<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{

    public function index()
    {
       $employees = Employee::with('position', 'department')->get();
       return response()->json($employees);
    }

   
    public function show($id)
    {
        $employee = Employee::with([
            'position',
            'department',
            'task',
            'trainings',
            'vacations',
            'projectAssignments',
        ])->findOrFail($id);

        return response()->json($employee);
    }
}