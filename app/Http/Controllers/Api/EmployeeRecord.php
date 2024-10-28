<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmployeeRecords;


class EmployeeRecord extends Controller
{
    public function index()
    {
        return EmployeeRecords::all();
    }

    public function show($id)
    {
        $EmployeeRecords = EmployeeRecords::where('employee_id', $id)->first();

        if (!$EmployeeRecords) {
            return response()->json(['message' => 'Log not found'], 404);
        }
    
        return response()->json($EmployeeRecords);
    }

    public function store(Request $request)
    {
        $item = EmployeeRecords::create($request->all());
        return response()->json($item, 201);
    }

    public function update(Request $request, $id)
    {
        $EmployeeRecords = EmployeeRecords::where('employee_id', $id)->first();
        if (!$EmployeeRecords) {
            return response()->json(['message' => 'Log not found'], 404);
        }
        
         $EmployeeRecords->update($request->all());
            return response()->json($EmployeeRecords, 200);

        
    }

    public function destroy($id)
    {
        
        $EmployeeRecords = EmployeeRecords::where('employee_id', $id)->first();

        if (!$EmployeeRecords) {
            return response()->json(['message' => 'Log not found'], 404);
        }

        $EmployeeRecords->delete();

        return response()->json(['message' => 'Log deleted successfully'], 200);
    }
}
