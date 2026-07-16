<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;


Route::middleware([
    'auth',
    'role:customer',
])->group(function () {
 Route::get('/customer/dashboard', [CustomerController::class, 'dashboard'])->name('customer.dashboard');
});