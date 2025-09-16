<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MobilController;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});
//route 
Route::get('/about', function () {
    return view('about');
});

Route::get('/home', [HomeController::class, 'home']);

//route buku
Route::get('/buku', [BukuController::class, 'index']);
Route::get('/tambahBuku', [BukuController::class, 'create']);
Route::post('/simpanBuku', [BukuController::class, 'store']);

//route mobil
Route::get('/mobil', [MobilController::class, 'index'])->name('mobil.index');
Route::get('/mobil/create', [MobilController::class, 'create'])->name('mobil.create');
Route::post('/mobil', [MobilController::class, 'store'])->name('mobil.store');

