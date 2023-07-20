<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EstimateFields;

class EstimateFieldsController extends Controller
{
    public function index()
    {
        //return EstimateFields::all();

        return response()->json(["name" => "GET /api/estimateFields : Récupération de tous les estimateFields."]);
    }

    public function show(EstimateFields $estimateFields)
    {
        // return $estimateFields;

        return response()->json(["name" => "GET /api/estimateFields/{estimateFields} : Récupération d'un estimateField."]);
    }

    public function store(Request $request)
    {
        // $estimateFields = EstimateFields::create($request->all());
        // return response()->json($estimateFields, 201);

        return response()->json(["name" => "POST /api/estimateFields/: Création d'un estimateField."]);
    }

    public function update(Request $request, EstimateFields $estimateFields)
    {
        // $estimateFields->update($request->all());
        // return $estimateFields;

        return response()->json(["name" => "PUT/PATCH /api/estimateFields/{estimateFields} : Modification d'un estimateField."]);
    }

    public function destroy(EstimateFields $estimateFields)
    {
        // $estimateFields->delete();
        // return response()->json(null, 204);

        return response()->json(["name" => "DELETE /api/estimateFields/{estimateFields} : Supression d'un estimateField."]);
    }
}
