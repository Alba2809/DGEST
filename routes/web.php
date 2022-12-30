<?php

use App\Http\Controllers\EgresadoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\JefeController;
use App\Http\Controllers\MuestraController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::redirect('/', 'login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

//cambiar a validación de auth

Route::middleware('can:egresado.form.index')->group(function (){
    Route::post('/egresado/modulo1', [EgresadoController::class, 'modulo1'])->middleware(['auth', 'verified'])->name('egresado.form.modulo1');
    Route::post('/egresado/modulo2', [EgresadoController::class, 'modulo2'])->middleware(['auth', 'verified'])->name('egresado.form.modulo2');
    Route::post('/egresado/modulo3', [EgresadoController::class, 'modulo3'])->middleware(['auth', 'verified'])->name('egresado.form.modulo3');
    Route::post('/egresado/modulo4', [EgresadoController::class, 'modulo4'])->middleware(['auth', 'verified'])->name('egresado.form.modulo4');
    Route::post('/egresado/modulo5', [EgresadoController::class, 'modulo5'])->middleware(['auth', 'verified'])->name('egresado.form.modulo5');
    Route::post('/egresado/modulo6', [EgresadoController::class, 'modulo6'])->middleware(['auth', 'verified'])->name('egresado.form.modulo6');
    Route::post('/egresado/modulo7', [EgresadoController::class, 'modulo7'])->middleware(['auth', 'verified'])->name('egresado.form.modulo7');
    Route::resource('egresado', EgresadoController::class)->middleware(['auth', 'verified'])->only(['index'])->names('egresado.form');
});

Route::middleware('can:empresa.form')->group(function (){
    Route::post('/empresa/moduloa', [EmpresaController::class, 'moduloa'])->middleware(['auth', 'verified'])->name('empresa.form.moduloa');
    Route::post('/empresa/modulob', [EmpresaController::class, 'modulob'])->middleware(['auth', 'verified'])->name('empresa.form.modulob');
    Route::post('/empresa/moduloc', [EmpresaController::class, 'moduloc'])->middleware(['auth', 'verified'])->name('empresa.form.moduloc');
    Route::resource('empresa', EmpresaController::class)->middleware(['auth', 'verified'])->only(['index'])->names('empresa.form');
});

Route::middleware('can:jefe.correo')->group(function (){
    Route::post('/jefe/enviar', [JefeController::class, 'enviar'])->middleware(['auth', 'verified'])->name(('jefe.correo.enviar'));
    Route::post('/jefe/control', [JefeController::class, 'control'])->middleware(['auth', 'verified'])->name(('jefe.correo.control'));
    Route::post('/jefe/aleatorios', [JefeController::class, 'aleatorios'])->middleware(['auth', 'verified'])->name(('jefe.correo.aleatorios'));
    Route::resource('jefe', JefeController::class)->middleware(['auth', 'verified'])->only(['index'])->names('jefe.correo');
});

Route::middleware('can:jefe.muestra')->group(function (){
    Route::resource('muestras', MuestraController::class)->middleware(['auth', 'verified'])->only(['index', 'show', 'edit'])->names('jefe.muestra');
});

Route::middleware('can:admin.usuarios')->group(function (){
    Route::resource('usuarios', UserController::class)->middleware(['auth', 'verified'])->names('admin.usuarios');
});


require __DIR__.'/auth.php';
