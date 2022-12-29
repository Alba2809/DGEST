<?php

use App\Http\Controllers\EgresadoController;
use App\Http\Controllers\EmpresaController;
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
    
    Route::post('/egresado/modulo1', [EgresadoController::class, 'modulo1'])->name('egresado.form.modulo1');
    Route::post('/egresado/modulo2', [EgresadoController::class, 'modulo2'])->name('egresado.form.modulo2');
    Route::post('/egresado/modulo3', [EgresadoController::class, 'modulo3'])->name('egresado.form.modulo3');
    Route::post('/egresado/modulo4', [EgresadoController::class, 'modulo4'])->name('egresado.form.modulo4');
    Route::post('/egresado/modulo5', [EgresadoController::class, 'modulo5'])->name('egresado.form.modulo5');
    Route::post('/egresado/modulo6', [EgresadoController::class, 'modulo6'])->name('egresado.form.modulo6');
    Route::post('/egresado/modulo7', [EgresadoController::class, 'modulo7'])->name('egresado.form.modulo7');
    
    Route::post('/empresa/moduloa', [EmpresaController::class, 'moduloa'])->name('empresa.form.moduloa');
    Route::post('/empresa/modulob', [EmpresaController::class, 'modulob'])->name('empresa.form.modulob');
    Route::post('/empresa/moduloc', [EmpresaController::class, 'moduloc'])->name('empresa.form.moduloc');
});

//cambiar a validación de auth

Route::resource('usuarios', UserController::class)->middleware(['auth', 'verified'])->names('admin.usuarios');

Route::resource('egresado', EgresadoController::class)->middleware(['auth', 'verified'])->names('egresado.form');

Route::resource('empresa', EmpresaController::class)->middleware(['auth', 'verified'])->names('empresa.form');

Route::post('/jefe/enviar', [JefeController::class, 'enviar'])->middleware(['auth', 'verified'])->name(('jefe.correo.enviar'));

Route::post('/jefe/control', [JefeController::class, 'control'])->middleware(['auth', 'verified'])->name(('jefe.correo.control'));

Route::post('/jefe/aleatorios', [JefeController::class, 'aleatorios'])->middleware(['auth', 'verified'])->name(('jefe.correo.aleatorios'));

Route::resource('jefe', JefeController::class)->middleware(['auth', 'verified'])->names('jefe.correo');

Route::resource('muestras', MuestraController::class)->middleware(['auth', 'verified'])->names('jefe.muestra');

require __DIR__.'/auth.php';
