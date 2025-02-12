<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstimateController;
use App\Http\Controllers\EstimateLinesController;
use App\Http\Controllers\EstimateFieldsController;
use App\Http\Controllers\EstimatePresetValuesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::apiResources( [
//     'recipes'  => RecipeController::class,
//     'comments' => CommentController::class,
//     'users'    => UserController::class,
//   ] );
//   Route::get( '/recipes/{recipe}/comments', [RecipeController::class, 'comments'] );

Route::apiResources([
    'estimate' => EstimateController::class,
    'estimateLines' => EstimateLinesController::class,
    'estimateFields' => EstimateFieldsController::class,
    'esimatePresetValues' => EstimatePresetValuesController::class,
]);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
