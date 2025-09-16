@extends('app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Daftar Buku</h1>
    <a href="/tambahBuku" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">
        Tambah Buku
    </a>

    <table class="min-w-full bg-white">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="py-2 px-4">Judul</th>
                <th class="py-2 px-4">Pengarang</th>
                <th class="py-2 px-4">Penerbit</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            @foreach ($buku as $buku)
                <tr class="border-b">
                    <td class="py-2 px-4">{{ $buku->judul }}</td>
                    <td class="py-2 px-4">{{ $buku->pengarang }}</td>
                    <td class="py-2 px-4">{{ $buku->penerbit }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection