<?php

use App\Http\Controllers\HistoricoController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('person')->group(function () {
    Route::get('/', [PersonController::class, 'index']);
    Route::post('/', [PersonController::class, 'store']);
    Route::get('/{id}', [PersonController::class, 'show']);
    Route::put('/{id}', [PersonController::class, 'update']);
    Route::delete('/{id}', [PersonController::class, 'destroy']);
});

Route::prefix('role')->group(function () {
    Route::get('/', [RoleController::class, 'index']);
    Route::post('/', [RoleController::class, 'store']);
    Route::get('/{id}', [RoleController::class, 'show']);
    Route::put('/{id}', [RoleController::class, 'update']);
    Route::delete('/{id}', [RoleController::class, 'destroy']);
});

Route::prefix('pagina')->group(function () {
    Route::get('/', [PaginaController::class, 'index']);
    Route::post('/', [PaginaController::class, 'store']);
    Route::get('/{id}', [PaginaController::class, 'show']);
    Route::put('/{id}', [PaginaController::class, 'update']);
    Route::delete('/{id}', [PaginaController::class, 'destroy']);
});

Route::prefix('usuario')->group(function () {
    Route::get('/', [UsuarioController::class, 'index']);
    Route::post('/', [UsuarioController::class, 'store']);
    Route::get('/{id}', [UsuarioController::class, 'show']);
    Route::put('/{id}', [UsuarioController::class, 'update']);
    Route::delete('/{id}', [UsuarioController::class, 'destroy']);
});

Route::prefix('link')->group(function () {
    Route::get('/', [LinkController::class, 'index']);
    Route::post('/', [LinkController::class, 'store']);
    Route::get('/{id}', [LinkController::class, 'show']);
    Route::put('/{id}', [LinkController::class, 'update']);
    Route::delete('/{id}', [LinkController::class, 'destroy']);
});

Route::prefix('historico')->group(function () {
    Route::get('/', [HistoricoController::class, 'index']);
    Route::post('/', [HistoricoController::class, 'store']);
    Route::get('/{id}', [HistoricoController::class, 'show']);
    Route::put('/{id}', [HistoricoController::class, 'update']);
    Route::delete('/{id}', [HistoricoController::class, 'destroy']);
});
