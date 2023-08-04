<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport Shoe Tracker</title>
    <!-- Add your CSS stylesheets or links here if needed -->
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Sport Shoe Tracker</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sportshoes.index') }}">Sport Shoes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sportshoes.add') }}">Add Shoes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Add your JavaScript scripts or links here if needed -->
</body>
</html>
