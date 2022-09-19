<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ComentarioController;
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

Route::post('criarPostagem', [PostController::class,'store']);
Route::post('Postagem/editar/{id}', [PostController::class,'edit']);
Route::get('Postagem/Mostrar1/{id}', [PostController::class,'show']);
Route::get('Postagem/Mostar', [PostController::class,'index']);
Route::delete('Postagem/deletar/{id}', [PostController::class,'destroy']);
//
//
Route::post('Postagem/{id}/comentario', [ComentarioController::class,'store']);
Route::post('comentario/editar/{id}', [ComentarioController::class,'edit']);
Route::get('comentario/Mostrar1/{id}', [ComentarioController::class,'show']);
Route::get('comentario/Mostar', [ComentarioController::class,'index']);
Route::delete('comentario/deletar/{id}', [ComentarioController::class,'destroy']);
