@extends('app')

@section('content')
<div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Tambah Mobil Baru</h1>

    <form action="/simpanMobil" method="POST">
        @csrf
        <div class="mb-4">
            <label for="nama_mobil" class="block text-gray-700 text-sm font-bold mb-2">
                Nama Mobil:
            </label>
            <input type="text" name="nama_mobil" id="nama_mobil" required
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label for="merk" class="block text-gray-700 text-sm font-bold mb-2">
                Merk:
            </label>
            <input type="text" name="merk" id="merk" required
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label for="warna" class="block text-gray-700 text-sm font-bold mb-2">
                Warna:
            </label>
            <input type="text" name="warna" id="warna" required
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-6">
            <label for="harga" class="block text-gray-700 text-sm font-bold mb-2">
                Harga:
            </label>
            <input type="number" name="harga" id="harga" required
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="flex items-center justify-center">
            <button type="submit"
                    class="w-full bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Simpan Mobil
            </button>
        </div>
    </form>
</div>
@endsection