<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;


Route::get('/', function () {
    return view('welcome');
});

// teste
Route::get('/pessoas', [PessoaController::class, 'index'])->name('pessoas.index');
Route::get('/pessoas/create', [PessoaController::class, 'create']);
Route::post('/pessoas', [PessoaController::class, 'store'])->name('pessoas.store');

