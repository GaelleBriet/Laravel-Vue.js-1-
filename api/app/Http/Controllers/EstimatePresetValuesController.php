<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EstimatePresetValues;


class EstimatePresetValuesController extends Controller
{
    public function index()
    {
        return EstimatePresetValues::all();
    }

    public function show(EstimatePresetValues $estimatePresetValues)
    {
        return $estimatePresetValues;
    }

    public function store(Request $request)
    {
        $estimatePresetValues = EstimatePresetValues::create($request->all());
        return response()->json($estimatePresetValues, 201); // 201 pour Created
    }

    public function update(Request $request, EstimatePresetValues $estimatePresetValues)
    {
        $estimatePresetValues->update($request->all());
        return $estimatePresetValues;
    }

    public function destroy(EstimatePresetValues $estimatePresetValues)
    {
        $estimatePresetValues->delete();
        return response()->json(null, 204); // 204 pour No Content
    }
}
