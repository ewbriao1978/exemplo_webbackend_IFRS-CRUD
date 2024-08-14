<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;

Route::get('/', [Home::class,'telaInicial'] );
Route::get('/inserir', [Home::class,'inserirDados']);
Route::post('/salvadados', [Home::class,'salvaDados']);
Route::get('/show', [Home::class,'apresentaDados']);
Route::post('remove',[Home::class,'removerDado']);