<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route Halaman Login
Route::get('/', [PageController::class, 'index'])->name('login');

// Route Proses Login (Menerima input username dan diarahkan ke Dashboard)
Route::post('/login', [PageController::class, 'login'])->name('login.submit');

// Route Halaman Dashboard (Menerima username via query parameter)
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

// Route Halaman Profile (Menerima username via query parameter)
Route::get('/profile', [PageController::class, 'profile'])->name('profile');

// Route Halaman Pengelolaan (Menampilkan array data dinamis)
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');