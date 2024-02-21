<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Register User</h1>
    <div class="container">
        <div class="form-container">
            <form method="POST" action="{{ route('register') }}">
            @csrf
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" required id="name" name="name" value="{{ old('name') }}"><br>

            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" required id="email" name="email" value="{{ old('email') }}"><br>

            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" required id="password" name="password"><br>

            <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</body>
</html>