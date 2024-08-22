<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, WorkExperienceController, ProjectController};

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/work-experience',[WorkExperienceController::class,'index'])->name('work-experience');
Route::get('/projects',[ProjectController::class,'index'])->name('projects');
Route::get('/projects/{id}',[ProjectController::class,'show'])->name('project-details');
