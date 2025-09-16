@extends('app')

@section('content')
<h1>Tambah Mobil Baru</h1>

<form action="/simpanMobil" method="POST">
    @csrf
    <div>
        <strong>Nama Mobil:</strong><br>
        <input type="text" name="nama_mobil" placeholder="Nama Mobil">
    </div>
    <div>
        <strong>Merk:</strong><br>
        <input type="text" name="merk" placeholder="Merk Mobil">
    </div>
    <div>
        <strong>Warna:</strong><br>
        <input type="text" name="warna" placeholder="Warna Mobil">
    </div>
    <div>
        <strong>Harga:</strong><br>
        <input type="number" name="harga" placeholder="Harga Mobil">
    </div>
    <br>
    <div>
        <button type="submit">Simpan</button>
    </div>
</form>
@endsection