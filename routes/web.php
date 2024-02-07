<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;


Route::get('/', HomeController::class);

Route::resource('cursos', CursoController::class);


