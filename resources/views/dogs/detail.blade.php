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
                    <p>Name: {{ $anjing->nama }}</p>
                    <p>Date of Birth: {{ $anjing->tanggal_lahir }}</p>
                    <p>Weight: {{ $anjing->berat }}</p>
                    <p>Color: {{ $anjing->warna }}</p>
                    <p>Health Condition: {{ $anjing->kondisi_kesehatan }}</p>
                    <p>Created at: {{ $anjing->created_at }}</p>
                    <p>Updated at: {{ $anjing->updated_at }}</p>
                    <!-- Add more details as needed -->

                    <!-- You can add additional styling or content here -->
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>