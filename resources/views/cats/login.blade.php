<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Login User</h1>
<div class="container">
        <div class="form-container">
        <form method="POST" action="{{ route('login') }}">
        @csrf
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" required id="name" name="name" value="{{ old('name') }}"><br>

            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" required id="password" name="password"><br>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        </div>
</div>
</body>
</html>
