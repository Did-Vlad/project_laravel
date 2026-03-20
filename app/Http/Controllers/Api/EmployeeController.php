<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EmployeeResource;
use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{

    public function index()
    {
       $employees = Employee::all();
       return EmployeeResource::collection($employees);
    }

   
    public function show($id)
    {
        $employee = Employee::with('position')->find($id);
    
        if ($employee) {
            return response()->json(['message' => 'Employee not found'], 404);
        }
    
        return new \App\Http\Resources\EmployeeResource($employee);
    }
}