<!-- resources/views/cats.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Cats</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="navbar">
    <nav>
        <div class="user-name">
            @auth
                <!-- Display the username if logged in -->
                <h2>{{ Auth::user()->name }}</h2>
            @else
                <!-- Display "Guest" if not logged in -->
                <h2>Guest</h2>
            @endauth
        </div>
        <div class="container-fluid">
            <div class="nav-links">
                @auth
                    <!-- Display dashboard link for logged-in users -->
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <h2>Dashboard</h2>
                    </a>
                    <!-- Logout form -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <h2>Logout</h2>
                    </a>
                @else
                    <!-- Display login and register links for guests -->
                    <a href="{{ route('login') }}" class="nav-link">
                        <h2>Login</h2>
                    </a>
                    <a href="{{ route('register') }}" class="nav-link">
                        <h2>Register</h2>
                    </a>
                @endauth
            </div>
        </div>
    </nav>
</div>

    <div class="container">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <h1>Data Kucing</h1>
    <div class="table-container">
    <form action="{{ route('cats.create') }}" method="get">
        <button type="submit" class="btn btn-info">Create</button>
    </form>
</div>

        <table border="1" >
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Tanggal Lahir</th>
            <th>Berat</th>
            <th>Warna</th>
            <th>Kondisi Kesehatan</th>
            <th>details</th>
        </tr>
        @php
        $rowNumber = 1;
    @endphp
        @foreach ($kucings as $kucing)
            <tr>
                <td>{{ $rowNumber++ }}</td>
                <td>{{ $kucing->nama }}</td>
                <td>{{ $kucing->breed->name }}</td>
                <td>{{ $kucing->tanggal_lahir }}</td>
                <td>{{ $kucing->berat }}</td>
                <td>{{ $kucing->warna }}</td>
                <td>{{ $kucing->kondisi_kesehatan }}</td>
                <td>
                    <form action="{{ route('cats.detail', ['id' => $kucing->id]) }}" method="get">
                        <button type="submit" class="btn btn-info">Detail</button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('cats.edit', $kucing->id) }}">Edit</a>  
                </td>
                <td>
                <form action="{{ route('cats.destroy', $kucing->id) }}" method="post" id="deleteForm_{{ $kucing->id }}">
        @csrf
        @method('DELETE')
        <button type="button" onclick="confirmDelete('{{ $kucing->id }}')">Delete</button>
    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <script>
    function confirmDelete(catId) {
        if (confirm("Are you sure you want to delete this cat?")) {
            document.getElementById('deleteForm_' + catId).submit();
        }
    }
</script>
</body>
</html>