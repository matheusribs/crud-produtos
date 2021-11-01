<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

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


// Rota de inserção de produtos no banco
// URL: http://127.0.0.1/crud-produtos/public/api/produtos/add
Route::post('/produtos/add',  [ProdutoController::class, 'add']);

// Rota de listagem total de produtos no banco
// URL: http://127.0.0.1/crud-produtos/public/api/produtos/list
Route::get('/produtos/list',  [ProdutoController::class, 'list']);

// Rota de select de produtos no banco -- Na URL digite o nome do ID do produto que deseja consultar
// URL: http://127.0.0.1/crud-produtos/public/api/produtos/
Route::get('/produtos/select/{id}',  [ProdutoController::class, 'select']);

// Rota de alteração de produtos no banco -- Na URL digite o nome do ID do produto que deseja alterar
// URL: http://127.0.0.1/crud-produtos/public/api/produtos/
Route::put('/produtos/update/{id}',  [ProdutoController::class, 'update']);


// Rota de exclusão de produto no banco -- Na URL digite o nome do ID do produto que deseja excluir
// URL: http://127.0.0.1/crud-produtos/public/api/produtos/delete
Route::delete('/produtos/delete/{id}',  [ProdutoController::class, 'delete']);