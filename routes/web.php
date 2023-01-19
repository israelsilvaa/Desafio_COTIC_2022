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


// GET:     BUSCAR dados no banco.
// POST:    SALVAR dados no banco.
// DELETE:  DELETAR dados do banco.
// PUT:     ATUALIZAR dados do banco.

Route::get('/home', [PersonagemController::class, 'index']);

// usuario é redirecionado para a view de formulario
Route::get('/form', [PersonagemController::class, 'create']);

// apos perencher o form, essa rota dispara o metodo de persistência
// no banco de dados.
Route::post('/personagem', [PersonagemController::class, 'store']);

// Para retorno de todos os personagem do banco de dados;
Route::get('/list', [PersonagemController::class, 'show']);

