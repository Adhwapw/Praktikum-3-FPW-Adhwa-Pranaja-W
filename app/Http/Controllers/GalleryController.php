<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Mobil;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();
        $mobils = Mobil::all();
        return view('galeri', compact('bukus', 'mobils'));
    }
}