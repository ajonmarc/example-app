<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;



Route::middleware([
    'auth',
    'role:seller',
])->group(function () {
  Route::get('/seller/dashboard', [SellerController::class, 'dashboard'])->name('seller.dashboard');
});