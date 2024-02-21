<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Cats</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>Bird Details</h1>

                <div class="card-body">
                    <!-- Display details about the dog using the $anjing variable -->
                    <p>Name: {{ $burung->nama }}</p>
                    <p>Date of Birth: {{ $burung->tanggal_lahir }}</p>
                    <p>Weight: {{ $burung->berat }}</p>
                    <p>Color: {{ $burung->warna }}</p>
                    <p>Health Condition: {{ $burung->kondisi_kesehatan }}</p>
                    <p>Created at: {{ $burung->created_at }}</p>
                    <p>Updated at: {{ $burung->updated_at }}</p>
                
                    <!-- Add more details as needed -->

                    <!-- You can add additional styling or content here -->
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>