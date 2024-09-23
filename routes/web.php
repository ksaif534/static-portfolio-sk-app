<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\WorkExperienceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/work-experience', [WorkExperienceController::class, 'index'])->name('work-experience');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('project-details');
