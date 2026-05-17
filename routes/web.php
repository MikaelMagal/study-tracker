<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\StudySessionController;
use App\Http\Controllers\HomeController;

Route::resource('subjects', SubjectController::class);
Route::resource('sessions', StudySessionController::class);
Route::get('/', [HomeController::class, 'index']);
