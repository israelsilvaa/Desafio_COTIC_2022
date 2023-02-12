<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonagemController;
use App\Http\Controllers\LoginController;
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
Route::get('/', [PersonagemController::class, 'index'])->middleware('aut');
Route::get('/home', [PersonagemController::class, 'index'])->name('home')->middleware('aut');
Route::get('/sobre', [PersonagemController::class, 'sobre'])->name('sobre');

Route::get('/login{erro?}', [LoginController::class, 'index'])->name('site.login');
Route::post('/login', [LoginController::class, 'acessar'])->name('site.login');
Route::get('/sair', [LoginController::class, 'sair'])->name('site.sair');
// C
// POST:    SALVAR dados no banco.
// usuario é redirecionado para a view de formulario
// apos perencher o form, essa rota dispara o metodo de persistência
// no banco de dados.
Route::get('/personagem/form', [PersonagemController::class, 'create'])->name('form')->middleware('aut');
Route::post('/personagem', [PersonagemController::class, 'store']);

// R
// GET:     BUSCAR dados no banco.
// Para retorno de todos os personagem do banco de dados;
Route::get('/list', [PersonagemController::class, 'show'])->middleware('aut');

// U
// PUT:     ATUALIZAR dados do banco.
Route::put('/personagem/update/{id}', [PersonagemController::class, 'update'])->middleware('aut');
Route::post('/personagem/edit/{id}', [PersonagemController::class, 'edit'])->middleware('aut');

// D
// DELETE:  DELETAR dados do banco.
Route::delete('/personagem/delete/{id}', [PersonagemController::class, 'delete']);
