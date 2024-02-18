<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminAuthController;

Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Route::middleware('guest')->group(function () {
//     Route::get('login', [AuthenticatedSessionController::class, 'create'])
//                 ->name('login');

//     Route::post('login', [AuthenticatedSessionController::class, 'store']);
// });


// Route::middleware('auth')->group(function () {
//     Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
//                 ->name('logout');
// });
