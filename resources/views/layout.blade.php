<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Group Cheater</title>

    <!-- ✅ Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fdf9f9;
            margin: 0;
        }

        .profile-img {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .title {
            font-size: 40px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .subtitle {
            font-size: 24px;
            color: #666;
        }
    </style>
</head>
<body>

    <!-- ✅ Bootstrap Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom shadow-sm px-4">
        <div class="container-fluid">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link fw-semibold" href="{{ route('Home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="{{ route('Ella') }}">Ella</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="{{ route('Sandy') }}">Sandy</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="{{ route('Rory') }}">Rory</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="container py-4">
        @yield('content')
    </div>

    <!-- ✅ Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
