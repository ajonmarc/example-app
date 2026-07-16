<?php
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:admin', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});