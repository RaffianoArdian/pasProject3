<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="navbar">
    <nav>
        <div class="user-name">
            @auth
                <!-- Display the username if logged in -->
                <a href="{{ route('cats.index') }}" class="nav-link">
                <h2>{{ Auth::user()->name }}</h2>
                </a>
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
<div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3>Welcome, {{ Auth::user()->name }}</h3>
                    </div>
                    <div class="card-body">
                        <!-- User Information -->
                        <div class="mb-3">
                            <h5>User Information</h5>
                            <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
                            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                        </div>
                        <!-- Recent Activities -->
                        <div class="mb-3">
                            <h5>Recent Activities</h5>
                            <ul>
                                <li>Activity 1 - Date/Time</li>
                                <li>Activity 2 - Date/Time</li>
                                <!-- Add more recent activities as needed -->
                            </ul>
                        </div>
                        <!-- Statistics -->
                        <div>
                            <h5>Statistics</h5>
                            <p><strong>Total Orders:</strong> 10</p>
                            <p><strong>Completed Orders:</strong> 8</p>
                            <!-- Add more statistics as needed -->
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>