<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MobilController;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

//route galeri
Route::get('/galeri', [GalleryController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);

//route buku
Route::get('/buku', [BukuController::class, 'index']);
Route::get('/tambahBuku', [BukuController::class, 'create']);
Route::post('/simpanBuku', [BukuController::class, 'store']);

//route mobil
Route::get('/mobil', [MobilController::class, 'index']);
Route::get('/tambahMobil', [MobilController::class, 'create']);
Route::post('/simpanMobil', [MobilController::class, 'store']);

