@extends('app')

@section('content')
    <h1 class="text-4xl font-bold text-gray-800 mb-8">Selamat Datang</h1>

    {{-- Bagian Statistik --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        {{-- Card Jumlah Buku --}}
        <div class="bg-white p-6 rounded-lg shadow-lg flex items-center">
            <div class="bg-blue-500 text-white rounded-full h-16 w-16 flex items-center justify-center text-3xl mr-4">
                <img src="https://img.icons8.com/?size=100&id=43131&format=png&color=000000" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v11.494m-9-5.747h18"/></img>
            </div>
            <div>
                <p class="text-gray-500 text-lg">Total Buku</p>
                <p class="text-3xl font-bold">{{ $jumlahBuku }}</p>
            </div>
        </div>

        {{-- Card Jumlah Mobil --}}
        <div class="bg-white p-6 rounded-lg shadow-lg flex items-center">
            <div class="bg-green-500 text-white rounded-full h-16 w-16 flex items-center justify-center text-3xl mr-4">
                <img src="https://img.icons8.com/?size=100&id=SOm65RYIA2SA&format=png&color=000000" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17l6-6-6-6"/></img>
            </div>
            <div>
                <p class="text-gray-500 text-lg">Total Mobil</p>
                <p class="text-3xl font-bold">{{ $jumlahMobil }}</p>
            </div>
        </div>
    </div>

    {{-- Data Terbaru --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        {{-- Card Buku Terbaru --}}
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Buku Terbaru</h2>
            <ul class="space-y-3">
                @forelse ($bukuTerbaru as $buku)
                    <li class="border-b pb-2">
                        <p class="font-semibold text-lg">{{ $buku->judul }}</p>
                        <p class="text-sm text-gray-600">oleh {{ $buku->pengarang }} ({{ $buku->penerbit }})</p>
                    </li>
                @empty
                    <li class="text-gray-500">Belum ada data buku.</li>
                @endforelse
            </ul>
        </div>

        {{-- Card Mobil Terbaru --}}
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Mobil Terbaru</h2>
            <ul class="space-y-3">
                @forelse ($mobilTerbaru as $mobil)
                    <li class="border-b pb-2">
                        <p class="font-semibold text-lg">{{ $mobil->nama_mobil }}</p>
                        <p class="text-sm text-gray-600">{{ $mobil->merk }} - {{ $mobil->warna }}</p>
                    </li>
                @empty
                    <li class="text-gray-500">Belum ada data mobil.</li>
                @endforelse
            </ul>
        </div>
    </div>
@endsection