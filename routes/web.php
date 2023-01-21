<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonagemController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// metodos de renderização ou redirecionamento de view
Route::get('/', [PersonagemController::class, 'index']);
Route::get('/home', [PersonagemController::class, 'index']);
Route::get('/sobre', [PersonagemController::class, 'sobre']);

// C
// POST:    SALVAR dados no banco.
// usuario é redirecionado para a view de formulario
// apos perencher o form, essa rota dispara o metodo de persistência
// no banco de dados.
Route::get('/personagem/form', [PersonagemController::class, 'create']);
Route::post('/personagem', [PersonagemController::class, 'store']);

// R
// GET:     BUSCAR dados no banco.
// Para retorno de todos os personagem do banco de dados;
Route::get('/list', [PersonagemController::class, 'show']);

// U
// PUT:     ATUALIZAR dados do banco.
Route::put('/personagem/update/{id}', [PersonagemController::class, 'update']);
Route::post('/personagem/edit/{id}', [PersonagemController::class, 'edit']);

// D
// DELETE:  DELETAR dados do banco.
Route::delete('/personagem/delete/{id}', [PersonagemController::class, 'delete']);
