<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Tasks</title>
</head>
<body style="background-color: #ff9999;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand ps-3 fw-bold" href="{{ route('home') }}">TASK</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">

                <div class="collapse navbar-collapse" id="mynavbar">
                    <div class="navbar-nav ms-auto">
                        <div class="dropdown">
                            <button class="btn text-white dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                @auth
                                {{ auth()->user()->name }}
                                @endauth <!-- Display the user's name here -->
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{ route('home') }}">Home</a></li>
                            <li><a class="dropdown-item" href="{{ route('records') }}">Tasks</a></li>
                            <li><a class="dropdown-item" href="{{ route('landing') }}">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
    </nav>

    @yield('main')

</body>
</html>