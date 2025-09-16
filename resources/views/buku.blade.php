@extends('app')

@section('content')
<div class="bg-white p-8 rounded-lg shadow-md">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Daftar Buku</h1>
        <a href="/tambahBuku" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-300">
            + Tambah Buku
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Judul</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Pengarang</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Penerbit</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @forelse ($buku as $item)
                    <tr class="hover:bg-gray-100 border-b">
                        <td class="text-left py-3 px-4">{{ $item->judul }}</td>
                        <td class="text-left py-3 px-4">{{ $item->pengarang }}</td>
                        <td class="text-left py-3 px-4">{{ $item->penerbit }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center py-4 text-gray-500">
                            Belum ada data buku.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection