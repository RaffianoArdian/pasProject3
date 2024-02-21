<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Cats</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Edit Data</h1>

    @if (session()->has('success'))
    <div class="alert alert-success col-lg-6" role=alert>
    @endif
    <div class="container">
        <div class="form-container">
    <form action="{{ route('cats.update', $kucing->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" required id="nama" name="nama" value="{{ $kucing->nama }}"><br>

            <label for="jenis_id">Jenis:</label>
<select name="jenis_id" id="jenis_id" required>
    @foreach ($breeds as $breed)
        <option value="{{ $breed->id }}" {{ $kucing->jenis_id == $breed->id ? 'selected' : '' }}>
            {{ $breed->name }}
        </option>
    @endforeach
</select><br>

            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="text" class="form-control" required id="tanggal_lahir" name="tanggal_lahir" value="{{ $kucing->tanggal_lahir }}"><br>

            <label for="berat" class="form-label">Berat</label>
            <input type="text" class="form-control" required id="berat" name="berat" value="{{ $kucing->berat }}"><br>

            <label for="warna" class="form-label">Warna</label>
            <input type="text" class="form-control" required id="warna" name="warna" value="{{ $kucing->warna }}"><br>

            <label for="kondisi_kesehatan" class="form-label">Kondisi Kesehatan</label>
            <select class="form-select" required id="kondisi_kesehatan" name="kondisi_kesehatan">
            <option value="Sehat" {{ $kucing->kondisi_kesehatan == 'Sehat' ? 'selected' : '' }}>Sehat</option>
            <option value="Vaksin" {{ $kucing->kondisi_kesehatan == 'Vaksin' ? 'selected' : '' }}>Vaksin</option>
            <option value="Sakit" {{ $kucing->kondisi_kesehatan == 'Sakit' ? 'selected' : '' }}>Sakit</option>
            </select>
        <br>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    </div>
</div>
</div>
</body>
</html>