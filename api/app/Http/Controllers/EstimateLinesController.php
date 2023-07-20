<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EstimateLines;

class EstimateLinesController extends Controller
{
    public function index()
    {
        return EstimateLines::all();
    }

    public function show(EstimateLines $estimateLines)
    {
        return $estimateLines;
    }

    public function store(Request $request)
    {
        $estimateLines = EstimateLines::create($request->all());
        return response()->json($estimateLines, 201); // 201 pour Created
    }

    public function update(Request $request, EstimateLines $estimateLines)
    {
        $estimateLines->update($request->all());
        return $estimateLines;
    }

    public function destroy(EstimateLines $estimateLines)
    {
        $estimateLines->delete();
        return response()->json(null, 204); // 204 pour No Content
    }
}
