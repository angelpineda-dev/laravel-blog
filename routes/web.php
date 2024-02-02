<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;


Route::get('/', HomeController::class);

Route::controller(CursoController::class)->group(function () {
    /* Index */
    Route::get('cursos/', 'index')->name('cursos.index');
    /* Create */
    Route::get('cursos/create', 'create')->name('cursos.create');
    Route::post('cursos', 'store')->name('cursos.store');
    /* Show */
    Route::get('cursos/{curso}', 'show')->name('cursos.show');
    /* Update */
    Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');
    Route::put('cursos/{curso}', 'update')->name('cursos.update');
    /* Delete */
});
