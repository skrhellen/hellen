<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('welcome');
});

//routes/web.php
Route::get('/aluno', [AlunoController::class,"index"]);
//carrega o formulario
Route::get('/aluno/creater', [AlunoController::class,"create"]);
//recebe os dados do formulario para ser salvo na função store
Route::post ('/aluno', [AlunoController::Class,"store"])->name('aluno.store');
Route::get('/aluno/destroy/{$id}', [AlunoController::class,"destroy"])->name('aluno.destroy');
Route::post ('/aluno/search', [AlunoController::Class,"search"])->name('aluno.search');

