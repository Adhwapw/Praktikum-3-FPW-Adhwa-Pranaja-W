<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        body { font-family: sans-serif; }
        table { width: 80%; margin: 20px auto; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Prodi</th>
                <th>Fakultas</th>
                <th>Semester</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswa as $mhs)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mhs->Nama }}</td>
                <td>{{ $mhs->Npm }}</td>
                <td>{{ $mhs->Prodi }}</td>
                <td>{{ $mhs->Fakultas }}</td>
                <td>{{ $mhs->semester }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>