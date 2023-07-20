<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::apiResources([
//     'estimate' => EstimateController::class,
// ]);

 Route::get('estimate', 'EstimateController@index');



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
