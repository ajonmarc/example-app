<?php
use App\Http\Controllers\SaController;
use Illuminate\Support\Facades\Route;

Route::middleware([
    'auth',
    'role:sa',
])->group(function () {
    Route::get('/sa/dashboard', [SaController::class, 'dashboard'])
        ->name('sa.dashboard');

    Route::get('/sa/users', [SaController::class, 'users'])
        ->middleware('permission:create users')
        ->name('sa.users');
});