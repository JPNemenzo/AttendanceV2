<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;


class Companys extends Controller
{
    public function index()
    {
        return Company::all();
    }

    public function show($id)
    {
        $Company = Company::where('company_id', $id)->first();

        if (!$Company) {
            return response()->json(['message' => 'Log not found'], 404);
        }
    
        return response()->json($Company);
    }

    public function store(Request $request)
    {
        $item = Company::create($request->all());
        return response()->json($item, 201);
    }

    public function update(Request $request, $id)
    {
        $Company = Company::where('company_id', $id)->first();
        if (!$Company) {
            return response()->json(['message' => 'Log not found'], 404);
        }
        
         $Company->update($request->all());
            return response()->json($Company, 200);
    }

    public function destroy($id)
    {

        $Company = Company::where('company_id', $id)->first();

        if (!$Company) {
            return response()->json(['message' => 'Log not found'], 404);
        }
        $Company->delete();

        return response()->json(['message' => 'Log deleted successfully'], 200);
    }
}
