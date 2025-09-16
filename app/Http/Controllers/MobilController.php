<?php
// app/Http/Controllers/MobilController.php

namespace App\Http\Controllers;
use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index()
    {
        $mobils = Mobil::all(); // Mengambil semua data mobil
        return view('mobil.index', compact('mobils'));
    }

    public function create()
    {
        return view('mobil.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mobil' => 'required',
            'merk' => 'required',
            'warna' => 'required',
            'harga' => 'required|numeric',
        ]);

        Mobil::create($request->all());

        return redirect()->route('mobil.index')
            ->with('success', 'Data mobil berhasil ditambahkan.');
    }
}
