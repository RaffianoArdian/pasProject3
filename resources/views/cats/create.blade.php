<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Cats</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Data Baru</h1>

    @if (session()->has('success'))
    <div class="alert alert-success col-lg-6" role=alert>
    @endif
    <div class="container">
        <div class="form-container">
    <form method="post" action="/cats/add">
        @csrf
        
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" required id="nama" name="nama" value="{{ old('nama') }}"><br>

            <label for="jenis_id">Jenis:</label> 
            <select name="jenis_id" id="jenis_id" required>
            <option value="" disabled selected>Select Breed</option>
            @foreach ($breeds as $breed)
            <option value="{{ $breed->id }}">{{ $breed->name }}</option>
            @endforeach
            </select><br>

            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="text" class="form-control" required id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"><br>

            <label for="berat" class="form-label">Berat</label>
            <input type="text" class="form-control" required id="berat" name="berat" value="{{ old('berat') }}"><br>

            <label for="warna" class="form-label">Warna</label>
            <input type="text" class="form-control" required id="warna" name="warna" value="{{ old('warna') }}"><br>

            <label for="kondisi_kesehatan" class="form-label">Kondisi Kesehatan</label>
            <select class="form-select" required id="kondisi_kesehatan" name="kondisi_kesehatan">
            <option value="Sehat" {{ old('kondisi_kesehatan') == 'Sehat' ? 'selected' : '' }}>Sehat</option>
            <option value="Vaksin" {{ old('kondisi_kesehatan') == 'Vaksin' ? 'selected' : '' }}>Vaksin</option>
            <option value="Sakit" {{ old('kondisi_kesehatan') == 'Sakit' ? 'selected' : '' }}>Sakit</option>
            </select><br>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
    </div>
</div>
</body>
</html>