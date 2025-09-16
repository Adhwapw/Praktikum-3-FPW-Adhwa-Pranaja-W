@extends('app')

@section('content')
<div class="bg-white p-8 rounded-lg shadow-md max-w-2xl mx-auto">
    <h1 class="text-3xl font-bold text-gray-800 mb-4 text-center">Tentang Aplikasi Ini</h1>
    <p class="text-gray-600 text-center mb-6">
        Aplikasi ini dibuat untuk memenuhi tugas Praktikum 3 dalam mata kuliah Framework Pemrograman Web.
    </p>

    <div class="border-t pt-6">
        <h2 class="text-2xl font-semibold text-gray-700 mb-3">Fitur Utama</h2>
        <ul class="list-disc list-inside text-gray-600 space-y-2">
            <li>Manajemen Data Buku: Menambah dan melihat daftar buku.</li>
            <li>Manajemen Data Mobil: Menambah dan melihat daftar mobil.</li>
            <li>Dashboard Sederhana: Menampilkan ringkasan jumlah data buku dan mobil.</li>
        </ul>
    </div>

    <div class="mt-6 border-t pt-6">
        <h2 class="text-2xl font-semibold text-gray-700 mb-3">Teknologi yang Digunakan</h2>
        <ul class="list-disc list-inside text-gray-600 space-y-2">
            <li><strong>Backend:</strong> Laravel</li>
            <li><strong>Frontend:</strong> Tailwind CSS</li>
            <li><strong>Database:</strong> MySQL</li>
        </ul>
    </div>
</div>
@endsection