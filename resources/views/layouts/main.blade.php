<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') - SMKN 4 Bogor</title>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        @yield('additional_css')
        
        <style>
            body {
                font-family: 'Poppins', sans-serif;
                padding-top: 76px;
            }
            
            .navbar {
                transition: all 0.3s ease;
            }
            
            .navbar.scrolled {
                background: rgba(255, 255, 255, 0.95) !important;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            }
            
            .nav-link {
                font-weight: 500;
                padding: 8px 16px !important;
                transition: all 0.3s ease;
            }
            
            .nav-link:hover {
                color: #007bff !important;
            }
            
            .nav-link.active {
                color: #007bff !important;
            }
            
            @yield('additional_styles')
        </style>
    </head>
    <body>
        @include('partials.navbar')
        
        @yield('content')
        
        @include('partials.footer')
        
        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        
        <script>
            AOS.init({
                duration: 800,
                once: true
            });
            
            // Navbar Scroll Effect
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    document.querySelector('.navbar').classList.add('scrolled');
                } else {
                    document.querySelector('.navbar').classList.remove('scrolled');
                }
            });
        </script>
        
        @yield('additional_scripts')
    </body>
</html> 