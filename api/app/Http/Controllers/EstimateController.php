<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estimate;

class EstimateController extends Controller
{
    //    
    /**
     * Method index
     *
     * @return void
     */
    public function index()
    {
        return Estimate::all();
        // $estimates = Estimate::all();
        // return response()->json($estimates);

    }

    /**
     * Method show
     *
     * @param Estimate $estimate [explicite description]
     *
     * @return void
     */
    public function show(Estimate $estimate)
    {
        return $estimate;
        // $estimate = Estimate::findOrFail($id);
        // return response()->json($estimate);
    }

    /**
     * Method store
     *
     * @param Request $request [explicite description]
     *
     * @return void
     */
    public function store(Request $request)
    {
        $estimate = Estimate::create($request->all());
        return response()->json($estimate, 201); // 201 pour Created

        // $estimate = new Estimate();
        // $estimate->name = $request->name;
        // $estimate->total_time = $request->total_time;
        // $estimate->save();
        // return response()->json([
        //     'id' => $estimate->id,
        //     'name' => $estimate->name,
        //     'total_time' => $estimate->total_time,
        // ]);
    }

    /**
     * Method update
     *
     * @param Request $request [explicite description]
     * @param Estimate $estimate [explicite description]
     *
     * @return void
     */
    public function update(Request $request, Estimate $estimate)
    {
        $estimate->update($request->all());
        // $estimate->save();
        return $estimate;
        // Mettre à jour un Estimate spécifique par son ID en utilisant les données reçues depuis la requête
        // $estimate = Estimate::findOrFail($id);
        // $estimate->update($request->all());
        // return response()->json($estimate);
    }

    /**
     * Method destroy
     *
     * @param Estimate $estimate [explicite description]
     *
     * @return void
     */
    public function destroy(Estimate $estimate)
    {
        // $estimate = Estimate::findOrFail($estimate);
        $estimate->delete();
        return response()->json(null, 204); // 204 pour No Content
    }
}
