<?php

use App\Http\Controllers\EgresadoController;
use App\Http\Controllers\JefeController;
use App\Http\Controllers\MuestraController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Route::get('/usuarios', [App\Http\Controllers\UserController::class, 'index'])->name('admin.usuarios');

//cambiar a validación de auth

Route::resource('usuarios', UserController::class)->middleware(['auth', 'verified'])->names('admin.usuarios');

Route::resource('formegresado', EgresadoController::class)->middleware(['auth', 'verified'])->names('egresado.form');

Route::post('/jefe/enviar', [JefeController::class, 'enviar'])->middleware(['auth', 'verified'])->name(('jefe.correo.enviar'));

Route::post('/jefe/control', [JefeController::class, 'control'])->middleware(['auth', 'verified'])->name(('jefe.correo.control'));

Route::post('/jefe/aleatorios', [JefeController::class, 'aleatorios'])->middleware(['auth', 'verified'])->name(('jefe.correo.aleatorios'));

Route::resource('jefe', JefeController::class)->middleware(['auth', 'verified'])->names('jefe.correo');

Route::post('/muestras/{id}', [MuestraController::class, 'show'])->middleware(['auth', 'verified'])->name('jefe.muestra.detalles');

Route::resource('muestras', MuestraController::class)->middleware(['auth', 'verified'])->names('jefe.muestra');

require __DIR__.'/auth.php';
