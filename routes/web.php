<?php

use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\UfrController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('etudiants', EtudiantController::class)->except(['show', 'edit', 'update']);
Route::resource('ufrs', UfrController::class)->except(['show', 'edit', 'update']);
Route::resource('filieres', FiliereController::class)->except(['show', 'edit', 'update']);
