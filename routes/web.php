<?php

use App\Http\Controllers\Client\AboutController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ProcessController;
use App\Http\Controllers\client\ServiceController;
use App\Http\Controllers\Client\TrackController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/track', [TrackController::class, 'index'])->name('track');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/process', [ProcessController::class, 'index'])->name('process');
Route::get('/service', [ServiceController::class, 'index'])->name('services');




include __DIR__ . '/admin.php';
