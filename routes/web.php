<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\regionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/dashboard', [ProfileController::class, 'index'])->name('dashboard');
Route::get('/daftar', [regionController::class, 'daftar'])->name('daftar');
Route::post('/getnegara', [regionController::class, 'getnegara'])->name('getnegara');


Route::get('/daftar', function () {
    return view('daftar');
});
Route::get('/beasiswa', function () {
    return view('beasiswa');
});
Route::get('/search/{search}', function (string $search) {
    return $search;
})->where('search', '.*');
Route::get('/elektro', function () {
    return view('jurusan.elektro');
});
Route::get('/arsi', function () {
    return view('jurusan.arsi');
});
Route::get('/sipil', function () {
    return view('jurusan.sipil');
});
Route::get('/infor', function () {
    return view('jurusan.infor');
});
Route::get('/sastra', function () {
    return view('jurusan.sastra');
});
Route::get('/mandarin', function () {
    return view('jurusan.mandarin');
});
Route::get('/akun', function () {
    return view('jurusan.akun');
});
Route::get('/manaj', function () {
    return view('jurusan.manaj');
});
require __DIR__ . '/auth.php';
