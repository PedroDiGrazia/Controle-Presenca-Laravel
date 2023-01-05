<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/presença/{$curso}',[LoginController::class,'login']) -> name('pagina-presenca');
Route::get('/',[LoginController::class,'cursologin']);

Route::post('/presença',[LoginController::class,'loginpresenca']);
Route::get('/curso',[LoginController::class,'cursologin']);
Route::get('/cadastro',[LoginController::class,'cadastro']);
Route::post('/cadastro/login',[LoginController::class,'cadastrar']);
