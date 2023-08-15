<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\ListaController;
use App\Http\Controllers\Personas;
use App\Http\Controllers\VotosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['middleware' => ["auth:sanctum"]], function () {
Route::get('candidatos', [CandidatoController::class, 'index']);
Route::get('lista', [ListaController::class, 'index']);
Route::post('votos', [VotosController::class, 'store']);
Route::put('candidatos/{id}', [CandidatoController::class, 'update']);
Route::delete('candidatos/{id}', [CandidatoController::class, 'destroy']);

});

Route::post('/auth/register', [AuthController::class, 'createUser']);
Route::post('/auth/login', [AuthController::class, 'loginUser']);

