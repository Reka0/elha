<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Background */
        body {
            background: linear-gradient(135deg, #e0f7fa, #f0f4f8);
            font-family: 'Arial', sans-serif;
        }

        /* Navbar */
        .navbar {
            background-color: #009688;
            /* Lebih segar */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            color: #ffffff !important;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: #ffffff !important;
            transition: color 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: #ffeb3b !important;
            /* Warna kuning yang menarik saat hover */
        }

        /* Card Post */
        .post {
            background-color: #ffffff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .post:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        /* Header and Titles */
        h1,
        h5 {
            color: #009688;
            font-weight: bold;
        }

        /* Content Text */
        .card-text,
        .text-muted {
            color: #555;
        }

        /* Footer */
        footer {
            background-color: #00796b;
            color: #ffffff;
            text-align: center;
            padding: 10px;
            width: 100%;
            position: fixed;
            bottom: 0;
            opacity: 0;
            /* Initially hidden */
            transition: opacity 0.5s;
            visibility: hidden;
        }

        /* Footer visible state */
        footer.show-footer {
            opacity: 1;
            visibility: visible;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <a class="navbar-brand" href="#">SMK ELHAKU</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.home') }}">Home</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.gallery') }}">Gallery</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.siswa') }}">Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.pegawai') }}">Pegawai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.pendaftaran.create') }}">Pendaftaran</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Content Container -->
    <div class="container mt-5 mb-5">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer id="footer">
        <p>&copy; 2024 SMK ELHAKU. All rights reserved.</p>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom JavaScript for Footer Visibility -->
    <script>
        window.addEventListener("scroll", function() {
            const footer = document.getElementById("footer");
            const scrollPosition = window.innerHeight + window.scrollY;
            const pageHeight = document.documentElement.scrollHeight;

            if (scrollPosition >= pageHeight) {
                footer.classList.add("show-footer"); // Show footer when scroll reaches bottom
            } else {
                footer.classList.remove("show-footer"); // Hide footer when not at bottom
            }
        });
    </script>
</body>

</html>
