<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EstimatePresetValues;


class EstimatePresetValuesController extends Controller
{
    public function index()
    {
        // return EstimatePresetValues::all();
        return response()->json(["name" => "GET /api/estimatePresetValues : Récupération des estimatePresetValues."]);
    }

    public function show(EstimatePresetValues $estimatePresetValues)
    {
        // return $estimatePresetValues;
        return response()->json(["name" => "GET /api/estimatePresetValues/{estimatePresetValues} : Récupération d'une estimatePresetValues."]);
    }

    public function store(Request $request)
    {
        // $estimatePresetValues = EstimatePresetValues::create($request->all());
        // return response()->json($estimatePresetValues, 201);
        return response()->json(["name" => "POST /api/estimatePresetValues : Création des estimatePresetValues."]);
    }

    public function update(Request $request, EstimatePresetValues $estimatePresetValues)
    {
        // $estimatePresetValues->update($request->all());
        // return $estimatePresetValues;
        return response()->json(["name" => "PUT/PARCH /api/estimatePresetValues/{estimatePresetValues} : Modification d'une estimatePresetValues."]);
    }

    public function destroy(EstimatePresetValues $estimatePresetValues)
    {
        // $estimatePresetValues->delete();
        // return response()->json(null, 204);
        return response()->json(["name" => "DELETE /api/estimatePresetValues/{estimatePresetValues} : Suppression d'une estimatePresetValues."]);
}
