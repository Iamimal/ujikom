<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Admin Panel</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Custom styles -->
    <style>
        body {
            min-height: 100vh;
            background: #f8f9fc;
        }

        .wrapper {
            display: flex;
            width: 100%;
            align-items: stretch;
        }

        .sidebar {
            width: 280px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            z-index: 999;
            background: #4e73df;
            background: linear-gradient(180deg, #4e73df 10%, #224abe 100%);
            color: #fff;
            transition: all 0.3s;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
        }

        .content {
            width: calc(100% - 280px);
            margin-left: 280px;
            min-height: 100vh;
            transition: all 0.3s;
            padding: 20px;
        }

        .sidebar-header {
            padding: 20px;
            background: rgba(0, 0, 0, 0.1);
        }

        .sidebar-link {
            color: rgba(255,255,255,.8);
            padding: 1rem;
            display: block;
            text-decoration: none;
            transition: all 0.3s;
            border-left: 4px solid transparent;
        }

        .sidebar-link:hover,
        .sidebar-link.active {
            color: #fff;
            background: rgba(255,255,255,.1);
            border-left-color: #fff;
        }

        .sidebar-heading {
            color: rgba(255,255,255,.4);
            padding: 0.875rem 1rem;
            font-size: .75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .topbar {
            background-color: white;
            box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15);
            border-radius: 0.5rem;
            margin-bottom: 1.5rem;
            padding: 1rem;
        }

        .card {
            border: none;
            box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15);
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-header {
            background-color: transparent;
            border-bottom: 1px solid rgba(0,0,0,.125);
            padding: 1rem;
        }

        .btn {
            border-radius: 0.5rem;
            padding: 0.5rem 1rem;
            font-weight: 500;
        }

        .btn-icon {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .nav-item {
            margin-bottom: 0.25rem;
        }

        .nav-link {
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }

        .dropdown-menu {
            border: none;
            box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15);
            border-radius: 0.5rem;
        }

        .dropdown-item {
            padding: 0.5rem 1rem;
            transition: all 0.3s ease;
        }

        .dropdown-item:hover {
            background-color: #f8f9fc;
        }

        @media (max-width: 768px) {
            .sidebar {
                margin-left: -280px;
            }
            .sidebar.active {
                margin-left: 0;
            }
            .content {
                width: 100%;
                margin-left: 0;
            }
            .content.active {
                margin-left: 280px;
            }
        }
    </style>
    @stack('styles')
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav class="sidebar">
            <div class="sidebar-header">
                <h4 class="mb-0">Admin Panel</h4>
            </div>

            <div class="nav flex-column">
                <div class="sidebar-heading">Core</div>
                
                <a href="{{ route('admin.dashboard') }}" 
                   class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="fas fa-fw fa-tachometer-alt me-2"></i>
                    Dashboard
                </a>

                <a href="{{ route('admin.web-preview') }}" 
                   class="sidebar-link {{ request()->routeIs('admin.web-preview') ? 'active' : '' }}">
                    <i class="fas fa-fw fa-globe me-2"></i>
                    Web Preview
                </a>

                <div class="sidebar-heading">Content</div>

                <a href="{{ route('admin.informasi.index') }}" 
                   class="sidebar-link {{ request()->routeIs('admin.informasi.*') ? 'active' : '' }}">
                    <i class="fas fa-fw fa-newspaper me-2"></i>
                    Informasi
                </a>

                <a href="{{ route('admin.agenda.index') }}" 
                   class="sidebar-link {{ request()->routeIs('admin.agenda.*') ? 'active' : '' }}">
                    <i class="fas fa-fw fa-calendar me-2"></i>
                    Agenda
                </a>

                <div class="sidebar-heading">Gallery</div>

                <a href="{{ route('admin.galeri.index') }}" 
                   class="sidebar-link {{ request()->routeIs('admin.galeri.*') ? 'active' : '' }}">
                    <i class="fas fa-fw fa-images me-2"></i>
                    Galeri Foto
                </a>

                <div class="sidebar-heading">Settings</div>

                <a href="{{ route('admin.profile.index') }}" 
                   class="sidebar-link {{ request()->routeIs('admin.profile.*') ? 'active' : '' }}">
                    <i class="fas fa-fw fa-user me-2"></i>
                    Profile
                </a>

                <a href="{{ route('admin.logout') }}" 
                   class="sidebar-link" 
                   onclick="return confirm('Yakin ingin logout?')">
                    <i class="fas fa-fw fa-sign-out-alt me-2"></i>
                    Logout
                </a>
            </div>
        </nav>

        <!-- Content -->
        <div class="content">
            <!-- Topbar -->
            <nav class="topbar">
                <div class="d-flex justify-content-between align-items-center">
                    <button type="button" id="sidebarCollapse" class="btn btn-primary d-md-none">
                        <i class="fas fa-bars"></i>
                    </button>

                    <div class="dropdown">
                        <a class="btn btn-link dropdown-toggle text-decoration-none" href="#" role="button" 
                           data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle me-1"></i>
                            {{ session('petugas_username') }}
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.profile.index') }}">
                                    <i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>
                                    Profile
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.logout') }}"
                                   onclick="return confirm('Yakin ingin logout?')">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Main Content -->
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('.sidebar').toggleClass('active');
                $('.content').toggleClass('active');
            });
        });
    </script>
    @stack('scripts')
</body>
</html> 