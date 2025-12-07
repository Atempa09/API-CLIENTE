<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;


use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\MaestroController;

use App\Http\Controllers\SumaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [StudentsController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentsController::class, 'create'])->name('students.create');
Route::post('/students', [StudentsController::class, 'store'])->name('students.store');
Route::get('/students/{id}/edit', [StudentsController::class, 'edit'])->name('students.edit');
Route::put('/students/{id}', [StudentsController::class, 'update'])->name('students.update');
Route::delete('/students/{id}', [StudentsController::class, 'destroy'])->name('students.destroy');
Route::view('/vistas', 'vistas')->name('vistas');


Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');
Route::get('/maestros', [MaestroController::class, 'index'])->name('maestros.index');


Route::get('/suma', [SumaController::class, 'index'])->name('suma.index');
Route::post('/suma', [SumaController::class, 'sumar'])->name('suma.sumar');
