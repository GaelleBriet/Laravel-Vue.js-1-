<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EstimateLines;

class EstimateLinesController extends Controller
{
    public function index()
    {
        // return EstimateLines::all();
        return response()->json(["name" => "GET /api/estimateLines : Récupération de tous les estimateLines."]);
    }

    public function show(EstimateLines $estimateLines)
    {
        // return $estimateLines;
        return response()->json(["name" => "GET /api/estimateLines/{estimateLines} : Récupération d'une estimateLines."]);
    }

    public function store(Request $request)
    {
        // $estimateLines = EstimateLines::create($request->all());
        // return response()->json($estimateLines, 201);
        return response()->json(["name" => "POST /api/estimateLines : Création d'une estimateLines."]);
    }

    public function update(Request $request, EstimateLines $estimateLines)
    {
        // $estimateLines->update($request->all());
        // return $estimateLines;
        return response()->json(["name" => "PUT/PATCH /api/estimateLines/{estimateLines} : Modification d'une estimateLines."]);
    }

    public function destroy(EstimateLines $estimateLines)
    {
        // $estimateLines->delete();
        // return response()->json(null, 204);
        return response()->json(["name" => "DELETE /api/estimateLines/{estimateLines} : Suppression d'une estimateLines."]);
    }
}
