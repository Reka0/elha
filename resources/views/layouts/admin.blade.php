<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <style>
        body {
            display: flex;
        }

        .sidebar {
            height: 100vh;
            width: 250px;
            background-color: #343a40;
            padding: 15px;
            position: fixed;
        }

        .sidebar h2 {
            color: #fff;
        }

        .sidebar a {
            color: #ddd;
            display: block;
            padding: 10px 0;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #495057;
            text-decoration: none;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            width: 100%;
        }

        .navbar {
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <a href="{{ route('admin.home.index') }}">Home</a>
        <a href="{{ route('admin.siswa.index') }}">Siswa</a>
        <a href="{{ route('admin.nilai.index') }}">Nilai Siswa</a>
        <a href="{{ route('admin.pegawai.index') }}">Pegawai</a>
        <a href="{{ route('admin.about.index') }}">About</a>
        <a href="{{ route('admin.pendaftaran.index') }}">Pendaftaran</a>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
    <div class="content">
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
