@extends('app')

@Section('content')
<h1>Halaman Buku</h1>
<form action="/simpanBuku" method="POST">
    @csrf
    <div>
        <label for="">Judul</label>
        <input type="text" name="judul">
    </div>
    <div>
        <label for="">Pengarang</label>
        <input type="text" name="pengarang">
    </div>
    <div>
        <label for="">Penerbit</label>
        <input type="text" name="penerbit">
    </div>
    <div>
        <button type="submit">Simpan</button>
    </div>
</form>
@endsection