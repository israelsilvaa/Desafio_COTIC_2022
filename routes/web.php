<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PersonagemController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', [PersonagemController::class, 'sobre'])->name('sobre');

// C
// POST:    SALVAR dados no banco.
// usuario é redirecionado para a view de formulario
// apos perencher o form, essa rota dispara o metodo de persistência
// no banco de dados.
Route::get('/personagem/form', [PersonagemController::class, 'create'])->name('form')->middleware('auth');
Route::post('/personagem', [PersonagemController::class, 'store'])->middleware('auth');

// R
// GET:     BUSCAR dados no banco.
// Para retorno de todos os personagem do banco de dados;
Route::get('/list', [PersonagemController::class, 'show'])->middleware('auth')->name('personagem.list');

// U
// PUT:     ATUALIZAR dados do banco.
Route::put('/personagem/update/{id}', [PersonagemController::class, 'update'])->middleware('auth');
Route::post('/personagem/edit/{id}', [PersonagemController::class, 'edit'])->middleware('auth');

// D
// DELETE:  DELETAR dados do banco.
Route::delete('/personagem/delete/{id}', [PersonagemController::class, 'delete'])->middleware('auth');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
