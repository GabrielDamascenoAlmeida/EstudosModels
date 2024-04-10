<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ProfessorController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/alunos', [AlunoController::class, 'Alunos']);

Route::get('/professores', [ProfessorController::class, 'Professor']);

Route::get('/events', [EventController::class, 'Index']);
