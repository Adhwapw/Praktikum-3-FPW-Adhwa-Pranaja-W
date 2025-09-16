<?php
// app/Http/Controllers/MobilController.php

namespace App\Http\Controllers;
use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index()
    {
        $mobil = Mobil::all(); 
        return view('mobil', compact('mobil'));
    }

    public function create()
    {
        return view('tambahMobil');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mobil' => 'required',
            'merk' => 'required',
            'warna' => 'required',
            'harga' => 'required|numeric',
        ]);
        
        Mobil::create($request);
        return redirect('/mobil');
    }
}
