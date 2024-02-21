<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Birds</title>
</head>
<body>
    <h1>Data Burung</h1>
    <table border = "1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Berat</th>
            <th>Warna</th>
            <th>Kondisi Kesehatan</th>
            <th>Detail</th>
        </tr>
        @foreach ($burungs as $burung)
        <tr>
            <td>{{ $burung->id }}</td>
            <td>{{ $burung->nama }}</td>
            <td>{{ $burung->tanggal_lahir }}</td>
            <td>{{ $burung->berat }}</td>
            <td>{{ $burung->warna }}</td>
            <td>{{ $burung->kondisi_kesehatan }}</td>
            <td>
                <form action="{{ route('birds.detail', ['id' => $burung->id]) }}" method="get">
                    <button type="submit" class="btn btn-info">Detail</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
</body>
</html>