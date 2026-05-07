<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Resources\EmployeeResource;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $query = Employee::with('position');
        
        if ($request->filled('status') && $request->status !== 'All') {
            $query->where('status', $request->status);
        }
        
        return EmployeeResource::collection($query->get());
    }

    public function store(Request $request)
    {
        $employee = Employee::create($request->all());
        return new EmployeeResource($employee);
    }

    public function show($id)
    {
        $employee = Employee::with('position')->find($id);
        if (!$employee) {
            return response()->json(['message' => 'Employee not found'], 404);
        }
        return new EmployeeResource($employee);
    }
}