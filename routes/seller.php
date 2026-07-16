<?php
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:seller', 'role:seller'])->group(function () {
    Route::get('/seller/dashboard', [SellerController::class, 'dashboard'])->name('seller.dashboard');
});