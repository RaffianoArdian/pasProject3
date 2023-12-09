<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dog Details</div>

                <div class="card-body">
                    <!-- Display details about the dog using the $anjing variable -->
                    <p>Name: {{ $kucing->nama }}</p>
                    <p>Date of Birth: {{ $kucing->tanggal_lahir }}</p>
                    <p>Weight: {{ $kucing->berat }}</p>
                    <p>Color: {{ $kucing->warna }}</p>
                    <p>Health Condition: {{ $kucing->kondisi_kesehatan }}</p>
                    <p>Created at: {{ $kucing->created_at }}</p>
                    <p>Updated at: {{ $kucing->updated_at }}</p>
                
                    <!-- Add more details as needed -->

                    <!-- You can add additional styling or content here -->
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>