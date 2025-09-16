@extends('app')

@section('content')
<div class="bg-white p-8 rounded-lg shadow-md">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Daftar Mobil</h1>
        <a href="/tambahMobil" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded transition duration-300">
            + Tambah Mobil
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nama Mobil</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Merk</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Warna</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Harga</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @forelse ($mobil as $mobil)
                    <tr class="hover:bg-gray-100 border-b">
                        <td class="text-left py-3 px-4">{{ $mobil->nama_mobil }}</td>
                        <td class="text-left py-3 px-4">{{ $mobil->merk }}</td>
                        <td class="text-left py-3 px-4">{{ $mobil->warna }}</td>
                        <td class="text-left py-3 px-4">Rp {{ number_format($mobil->harga, 0, ',', '.') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-4 text-gray-500">
                            Belum ada data mobil.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection