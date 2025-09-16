<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Mobil;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Menghitung total data
        $jumlahBuku = Buku::count();
        $jumlahMobil = Mobil::count();

        // Mengambil 5 data terbaru
        $bukuTerbaru = Buku::latest()->take(5)->get();
        $mobilTerbaru = Mobil::latest()->take(5)->get();

        // Mengirim semua data ke view 'home'
        return view('home', compact(
            'jumlahBuku', 
            'jumlahMobil', 
            'bukuTerbaru', 
            'mobilTerbaru'
        ));
    }
}