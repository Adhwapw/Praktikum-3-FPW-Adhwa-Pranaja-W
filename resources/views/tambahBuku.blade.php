@extends('app')

@section('content')
<div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Tambah Buku Baru</h1>

    <form action="/simpanBuku" method="POST">
        @csrf
        <div class="mb-4">
            <label for="judul" class="block text-gray-700 text-sm font-bold mb-2">
                Judul Buku:
            </label>
            <input type="text" name="judul" id="judul" required
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label for="pengarang" class="block text-gray-700 text-sm font-bold mb-2">
                Pengarang:
            </label>
            <input type="text" name="pengarang" id="pengarang" required
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-6">
            <label for="penerbit" class="block text-gray-700 text-sm font-bold mb-2">
                Penerbit:
            </label>
            <input type="text" name="penerbit" id="penerbit" required
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="flex items-center justify-center">
            <button type="submit"
                    class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Simpan Buku
            </button>
        </div>
    </form>
</div>
@endsection