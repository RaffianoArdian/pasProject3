<!-- resources/views/dogs.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Dogs</title>
    <!-- Add your CSS or Bootstrap link here -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <h1>Data Anjing</h1>
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
        @foreach ($anjings as $anjing)
            <tr>
                <td>{{ $anjing->id }}</td>
                <td>{{ $anjing->nama }}</td>
                <td>{{ $anjing->tanggal_lahir }}</td>
                <td>{{ $anjing->berat }}</td>
                <td>{{ $anjing->warna }}</td>
                <td>{{ $anjing->kondisi_kesehatan }}</td>
                <td>
                    <form action="{{ route('dogs.detail', ['id' => $anjing->id]) }}" method="get">
                        <button type="submit" class="btn btn-info">Detail</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

</body>
</html>