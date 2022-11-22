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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('pacientes', [App\Http\Controllers\Api\PacienteController::class, 'index']);
//Route::get('pacientes/{paciente}', [App\Http\Controllers\Api\PacienteController::class, 'show']);
//Route::post('pacientes', [App\Http\Controllers\Api\PacienteController::class, 'store']);
//Route::put('pacientes/{paciente}', [App\Http\Controllers\Api\PacienteController::class, 'update']);

Route::apiResource('pacientes', App\Http\Controllers\Api\PacienteController::class);
Route::apiResource('familias', App\Http\Controllers\Api\FamiliaController::class);

