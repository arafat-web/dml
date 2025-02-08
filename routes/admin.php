<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ContactInfoController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SeoController;
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
    Route::prefix('seo')->controller(SeoController::class)->group(function () {
        Route::get('/', 'index')->name('admin.seo.index');
        Route::get('/create', 'create')->name('admin.seo.create');
        Route::post('/store', 'store')->name('admin.seo.store');
        Route::get('/edit/{seo}', 'edit')->name('admin.seo.edit');
        Route::post('/update/{seo}', 'update')->name('admin.seo.update');
        Route::get('/show/{seo}', 'show')->name('admin.seo.show');
        Route::get('/destroy/{seo}', 'destroy')->name('admin.seo.destroy');
    });

    Route::prefix('contact-info')->controller(ContactInfoController::class)->group(function () {
        Route::get('/', 'index')->name('admin.contact-info.index');
        Route::post('/update/{contactInfo}', 'update')->name('admin.contact-info.update');
    });
});
