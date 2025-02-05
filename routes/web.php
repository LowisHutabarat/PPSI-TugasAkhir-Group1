<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\CeritaSuksesController;
use App\Http\Controllers\PortofolioController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/connect-with-alumni', [AlumniController::class, 'index'])->name('alumniConnect');
Route::get('/cerita-sukses', [CeritaSuksesController::class, 'index'])->name('ceritaSukses');
Route::get('/portofolio', [PortofolioController::class, 'index'])->name('portofolio');




