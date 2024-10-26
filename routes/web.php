<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;

// Only one route for the root URL
Route::get('/', [ResumeController::class, 'index'])->name('resumes.index');
