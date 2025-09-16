@extends('app')

@Section('content')
    <h1>Halaman Buku</h1>

    <a href="/tambahBuku"><button>Tambah buku</button></a>
    <table border="1">
        <thead>
            <tr>
                <th>judul</th>
                <th>Pengarang</th>
                <th>penerbit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($buku as $buku)
                <tr>
                    <td>{{$buku -> judul}}</td>
                    <td>{{$buku -> pengarang}}</td>
                    <td>{{$buku -> penerbit}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection