<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/',[LoginController::class],'login');
Route::get('/',[LoginController::class,'cursologin']);

Route::get('/presenca',[LoginController::class,'login']);
Route::get('/curso',[LoginController::class,'cursologin']);
Route::get('/cadastro',[LoginController::class,'cadastro']);
