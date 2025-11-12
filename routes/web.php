<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'HALLO';
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminDashboardController::class, 'index'])
        ->name('admin.dashboard');

    // Route::get('/Buku', [App\Http\Controllers\Admin\BukuController::class, 'index'])
    // ->name('admin.buku');
    Route::resource('/kategori', App\Http\Controllers\KategoriController::class);
});

Route::middleware(['auth', 'role:user'])->prefix('user')->name('user')->group(function () {

    Route::get('/dashboard', function () {
        return view('user.dashboard');
    })->name('user.dashboard');
});
Route::resource('/buku', App\Http\Controllers\Admin\BukuController::class);
