<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/login', [AuthController::class, 'login'])->name('login');
Route::post('/admin/login', [AuthController::class, 'authenticate'])->name('admin.login.post');

Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::prefix('services')->controller(ServiceController::class)->group(function () {
        Route::get('/', 'index')->name('admin.services.index');
        Route::get('/create', 'create')->name('admin.services.create');
        Route::post('/store', 'store')->name('admin.services.store');
        Route::get('/edit/{service}', 'edit')->name('admin.services.edit');
        Route::post('/update/{service}', 'update')->name('admin.services.update');
        Route::get('/show/{service}', 'show')->name('admin.services.show');
        Route::post('/destroy/{service}', 'destroy')->name('admin.services.destroy');
    });
});
