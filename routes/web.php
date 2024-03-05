<?php

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;


Route::get('/', HomeController::class)->name('home');

Route::resource('cursos', CursoController::class);

Route::view('nosotros', 'static.nosotros')->name('nosotros');

Route::get('contactanos', function(){

    Mail::to('angel@test.com')->send(new ContactanosMailable());

    return 'Mensaje enviado';

})->name('contactanos');