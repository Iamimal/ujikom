<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 4 Bogor</title>
    <!-- Link ke CSS Anda (jika ada) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS untuk Navbar dan Logo */
        .navbar {
            padding-top: 1rem;
            padding-bottom: 1rem;
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-size: 1.25rem;
        }

        .navbar-brand img {
            transition: all 0.3s ease;
            height: 40px; /* Ukuran logo default */
        }

        /* Halaman beranda */
        body.home-page .navbar-brand img {
            height: 40px; /* Logo ukuran 40px untuk halaman beranda */
        }

        /* Halaman selain beranda */
        body.other-page .navbar-brand img {
            height: 30px; /* Logo ukuran lebih kecil di halaman lain */
        }

        /* Responsif: Logo lebih kecil pada layar kecil */
        @media (max-width: 767.98px) {
            .navbar-brand img {
                height: 30px; /* Ukuran logo lebih kecil pada layar mobile */
            }
        }

        /* Styling untuk navbar-link */
        .nav-link {
            padding: 0.5rem 1rem !important;
            font-weight: 500;
            color: #2c3e50 !important;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            right: 50%;
            height: 2px;
            background: #4e73df;
            transition: all 0.3s ease;
            opacity: 0;
        }

        .nav-link:hover:after,
        .nav-link.active:after {
            left: 1rem;
            right: 1rem;
            opacity: 1;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #4e73df !important;
        }

        @media (max-width: 991.98px) {
            .navbar-collapse {
                background: white;
                padding: 1rem;
                border-radius: 10px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.1);
                margin-top: 1rem;
            }

            .nav-link {
                padding: 0.75rem 1rem !important;
            }

            .nav-link:after {
                display: none;
            }
        }
    </style>
</head>
<body class="{{ Request::is('/') ? 'home-page' : 'other-page' }}">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('images/logo-sekolah.svg') }}" alt="Logo">
                <span class="ms-2 fw-bold text-primary">SMKN 4 Bogor</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('profil') ? 'active' : '' }}" href="/profil">
                            Profil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('program-keahlian') ? 'active' : '' }}" href="/program-keahlian">
                            Program Keahlian
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('galeri') ? 'active' : '' }}" href="/galeri">
                            Galeri
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Script untuk Bootstrap (jika belum ada) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
