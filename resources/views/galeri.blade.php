@extends('app')

@section('content')
<div class="mb-12">
    <h1 class="text-4xl font-bold text-center text-gray-800 mb-4">Galeri Buku</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        @foreach ($bukus as $buku)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="https://placehold.co/400x300/e2e8f0/333?text=Buku" alt="Foto Buku" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-2">{{ $buku->judul }}</h2>
                    <p class="text-gray-600">Penulis: {{ $buku->penulis }}</p>
                    <p class="text-gray-600">Tahun: {{ $buku->tahun_terbit }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div>
    <h1 class="text-4xl font-bold text-center text-gray-800 mb-4">Galeri Mobil</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        @foreach ($mobils as $mobil)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="https://placehold.co/400x300/333/e2e8f0?text=Mobil" alt="Foto Mobil" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-2">{{ $mobil->nama_mobil }}</h2>
                    <p class="text-gray-600">Merk: {{ $mobil->merk }}</p>
                    <p class="text-gray-600">Warna: {{ $mobil->warna }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection