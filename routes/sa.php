<?php
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sa', 'role:sa'])->group(function () {
    Route::get('/sa/dashboard', [SaController::class, 'dashboard'])->name('sa.dashboard');
});