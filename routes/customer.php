<?php
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:customer', 'role:customer'])->group(function () {
    Route::get('/customer/dashboard', [CustomerController::class, 'dashboard'])->name('customer.dashboard');
});