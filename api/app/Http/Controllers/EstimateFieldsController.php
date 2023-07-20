<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EstimateFields;

class EstimateFieldsController extends Controller
{
    public function index()
    {
        return EstimateFields::all();
    }

    public function show(EstimateFields $estimateFields)
    {
        return $estimateFields;
    }

    public function store(Request $request)
    {
        $estimateFields = EstimateFields::create($request->all());
        return response()->json($estimateFields, 201); // 201 pour Created
    }

    public function update(Request $request, EstimateFields $estimateFields)
    {
        $estimateFields->update($request->all());
        return $estimateFields;
    }

    public function destroy(EstimateFields $estimateFields)
    {
        $estimateFields->delete();
        return response()->json(null, 204); // 204 pour No Content
    }
}
