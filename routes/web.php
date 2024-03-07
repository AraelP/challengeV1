<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\DuplicadosController;


Route::get('/',[EmpleadoController::class, 'index'])->name('index');
Route::post('/import',[EmpleadoController::class, 'import'])->name('import');
Route::get('asistencia/{empleadoId}', [AsistenciaController::class, 'getAsistenciaById'])->name('asistencia');
Route::get('/generateArray', [DuplicadosController::class, 'showForm'])->name('generateArray');
Route::post('/generateArray', [DuplicadosController::class, 'generateArray'])->name('processArray');