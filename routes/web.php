
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Halaman Login
Route::get('/', [PageController::class, 'login'])->name('login');

// Proses Login
Route::post('/login', [PageController::class, 'prosesLogin'])
    ->name('login.process');

// Halaman Dashboard
Route::get('/dashboard', [PageController::class, 'dashboard'])
    ->name('dashboard');

// Halaman Pengelolaan
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])
    ->name('pengelolaan');

// Halaman Profile
Route::get('/profile', [PageController::class, 'profile'])
    ->name('profile');
