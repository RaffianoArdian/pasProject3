<!-- resources/views/cats.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Cats</title>
    <!-- Add your CSS or Bootstrap link here -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <h1>Data Kucing</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Berat</th>
            <th>Warna</th>
            <th>Kondisi Kesehatan</th>
            <th>details</th>
        </tr>
        @foreach ($kucings as $kucing)
            <tr>
                <td>{{ $kucing->id }}</td>
                <td>{{ $kucing->nama }}</td>
                <td>{{ $kucing->tanggal_lahir }}</td>
                <td>{{ $kucing->berat }}</td>
                <td>{{ $kucing->warna }}</td>
                <td>{{ $kucing->kondisi_kesehatan }}</td>
                <td>
                    <form action="{{ route('cats.detail', ['id' => $kucing->id]) }}" method="get">
                        <button type="submit" class="btn btn-info">Detail</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

</body>
</html>