{{-- resources/views/mobil/mobil.blade.php --}}
@extends('app')

@section('content')
<h1>Daftar Mobil</h1>

<a href="{{ route('mobil.create') }}">Tambah Mobil Baru</a><br><br>

@if ($message = Session::get('success'))
    <p style="color: green;">{{ $message }}</p>
@endif

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Mobil</th>
        <th>Merk</th>
        <th>Warna</th>
        <th>Harga</th>
    </tr>
    @foreach ($data as $mobil)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $mobil->nama_mobil }}</td>
        <td>{{ $mobil->merk }}</td>
        <td>{{ $mobil->warna }}</td>
        <td>Rp {{ number_format($mobil->harga, 0) }}</td>
    </tr>
    @endforeach
</table>
@endsection