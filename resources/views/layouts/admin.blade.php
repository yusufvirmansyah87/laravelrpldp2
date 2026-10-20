<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background: #f5f6fa;
        }

        /* Bagian konten utama akan mengisi sisa ruang yang kosong */
        .content-wrapper {
            flex: 1;
        }

        /* sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            min-height: 100vh;
            background: #212529;
            color: white;
        }

        .sidebar .logo {
            font-size: 22px;
            font-weight: bold;
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 1);
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 14px 20px;
            transition: .3s;
        }

        .sidebar a:hover {
            background: #0d6efd;
        }

        .sidebar hr {
            border-color: #6c757d;
        }

        /* content */
        .content {
            margin-left: 250px;
            padding: 20px;
        }

        /* topbar */
        .topbar {
            background: white;
            border-radius: 10px;
            padding: 15px 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 08);
        }

        /* responsive */
        @media(max-width: 768px) {
            .sidebar {
                display: none;
            }

            .content {
                margin-left: 0;
            }

            .mobile-menu {
                display: inline-block;
            }
        }

        @media(min-width:769px) {
            .mobile-menu {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="logo">
            Admin Panel
        </div>
        <a href="{{ route('dashboard') }}">
            <i class="bi bi-speedometer2"></i>
            Dashboard
        </a>
        <a href="{{ route('kategori.index') }}">
            <i class="bi bi-folder-fill"></i>
            Kategori Artikel
        </a>
        <a href="#">
            <i class="bi bi-newspaper"></i>
            Artikel
        </a>
        <hr>
        <a href="#">
            <i class="bi bi-globe"></i>
            Lihat Website
        </a>
        <a href="#">
            <i class="bi bi-box-arrow-right"></i>
            Logout
        </a>
    </div>
    <div class="content content-wrapper">
        <!-- Topbar -->
        <div class="topbar d-flex justify-content-between  align-items-center">
            <div>
                <button class="btn btn-dark mobile-menu">
                    <i class="bi bi-list"></i>
                </button>
                <span class="fs-5 fw-bold">
                    Dashboard Administrator
                </span>
            </div>
            <div>
                Administrator
            </div>
        </div>
        <!-- Isi Halaman -->
        @yield('content')
    </div>
    @include('partials.footer')
</body>

</html>