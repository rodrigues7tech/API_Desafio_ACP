<?php

use App\Http\Controllers\ProdutosController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/produtos', [ProdutosController::class,'index']);
Route::post('/produtos/store', [ProdutosController::class,'store']);
Route::get('/produtos/{id}', [ProdutosController::class,'show']);
Route::put('produtos/{id}', [ProdutosController::class,'update']);
Route::delete('produtos/{id}', [ProdutosController::class,'destroy']);

