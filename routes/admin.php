<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::middleware([
    'auth',
    'role:admin',
])->group(function () {
   Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});