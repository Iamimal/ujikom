<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMKN 4 Bogor</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .hero-section {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }

        .hero-slider {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .swiper-container {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            background-size: cover;
            background-position: center;
        }

        .hero-content {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            transform: translateY(-50%);
            z-index: 2;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.8);
            z-index: 1;
        }

        .custom-shape {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 2;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .stats-box {
            text-align: center;
            padding: 40px 20px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin: 15px 0;
            transition: all 0.3s ease;
        }

        .stats-box:hover {
            transform: translateY(-10px);
        }

        .program-card {
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .program-card:hover {
            transform: translateY(-10px);
        }

        .program-card img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }

        .program-content {
            padding: 20px;
        }

        .sambutan-section {
            background: #f8f9fa;
            padding: 100px 0;
        }

        .kepsek-img {
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .news-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .gallery-item {
            position: relative;
            margin-bottom: 30px;
            aspect-ratio: 1/1;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 20px;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
            color: white;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .gallery-item:hover .gallery-caption {
            opacity: 1;
        }

        .custom-shape {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .custom-shape svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 150px;
        }

        .program-card {
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            height: 100%;
        }

        .program-card:hover {
            transform: translateY(-10px);
        }

        .program-image {
            position: relative;
            aspect-ratio: 16/9;
            overflow: hidden;
        }

        .program-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .program-card:hover .program-image img {
            transform: scale(1.1);
        }

        .program-content {
            padding: 20px;
        }

        .program-content h4 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: #2c3e50;
        }

        .program-content p {
            color: #6c757d;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .btn-outline-primary {
            border-width: 2px;
            font-weight: 500;
            padding: 8px 20px;
            transition: all 0.3s ease;
        }

        .btn-outline-primary:hover {
            transform: translateY(-2px);
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    @include('partials.navbar')

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image: url('{{ asset('images/kepala-sekolah.jpg') }}');"></div>
                    <div class="swiper-slide" style="background-image: url('{{ asset('images/r-pplg2.jpg') }}');"></div>
                    <div class="swiper-slide" style="background-image: url('{{ asset('images/r-tkj.jpg') }}');"></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="hero-content">
            <div class="container text-center position-relative" style="z-index: 2;">
                <h1 class="display-4 fw-bold text-white mb-4" data-aos="fade-up">SMKN 4 Bogor</h1>
                <p class="lead text-white mb-4" data-aos="fade-up" data-aos-delay="100">Siap Kerja, Mandiri, dan Kreatif</p>
                <a href="{{ url('/program-keahlian') }}" class="btn btn-primary btn-lg px-5 py-3" data-aos="fade-up" data-aos-delay="200">Lihat Selengkapnya</a>
            </div>
        </div>
        <div class="custom-shape">
            <svg viewBox="0 0 1200 150" preserveAspectRatio="none">
                <path d="M0,150 C600,100 1000,50 1200,150L1200,150 L0,150Z" style="fill: #fff;"></path>
            </svg>
        </div>
    </section>

    <!-- Sambutan Kepala Sekolah -->
    <section class="sambutan-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5" data-aos="fade-right">
                    <img src="{{ asset('images/kepala-sekolah.jpg') }}" class="img-fluid kepsek-img" alt="Kepala Sekolah">
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <h6 class="text-primary">Sambutan Kepala Sekolah</h6>
                    <h2 class="mb-4">Selamat Datang di SMKN 4 Bogor</h2>
                    <p class="lead">Assalamu'alaikum Wr. Wb.</p>
                    <p>Puji syukur kita panjatkan kepada Allah SWT yang telah memberikan rahmat dan hidayah-Nya sehingga website SMKN 4 Bogor dapat hadir di hadapan Anda semua.</p>
                    <p>SMKN 4 Bogor berkomitmen untuk menghasilkan lulusan yang kompeten, berkarakter, dan siap bersaing di dunia kerja maupun wirausaha.</p>
                    <div class="mt-4">
                        <h5>Drs. Mulya Murprihartono, M.Si.</h5>
                        <small class="text-muted">Kepala SMKN 4 Bogor</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Keahlian -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">Program Keahlian</h2>
            <div class="row">
                <!-- PPLG -->
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="program-card">
                        <div class="program-image">
                            <img src="{{ asset('images/program/pplg.png') }}" alt="PPLG">
                        </div>
                        <div class="program-content">
                            <h4>Pengembangan Perangkat Lunak dan Gim</h4>
                            <p>Mempelajari pemrograman, pengembangan aplikasi dan game</p>
                            <a href="{{ url('/program-keahlian') }}" class="btn btn-outline-primary mt-3">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- TJKT -->
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="program-card">
                        <div class="program-image">
                            <img src="{{ asset('images/program/tjkt.png') }}" alt="TJKT">
                        </div>
                        <div class="program-content">
                            <h4>Teknik Jaringan Komputer dan Telekomunikasi</h4>
                            <p>Fokus pada jaringan komputer dan sistem telekomunikasi</p>
                            <a href="{{ url('/program-keahlian') }}" class="btn btn-outline-primary mt-3">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- Teknik Pengelasan -->
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="program-card">
                        <div class="program-image">
                            <img src="{{ asset('images/program/tp.jpeg') }}" alt="Teknik Pengelasan">
                        </div>
                        <div class="program-content">
                            <h4>Teknik Pengelasan</h4>
                            <p>Program keahlian yang fokus pada teknologi pengelasan modern</p>
                            <a href="{{ url('/program-keahlian') }}" class="btn btn-outline-primary mt-3">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- Teknik Otomotif -->
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="program-card">
                        <div class="program-image">
                            <img src="{{ asset('images/program/to.png') }}" alt="Teknik Otomotif">
                        </div>
                        <div class="program-content">
                            <h4>Teknik Otomotif</h4>
                            <p>Mempelajari teknologi kendaraan dan sistem otomotif modern</p>
                            <a href="{{ url('/program-keahlian') }}" class="btn btn-outline-primary mt-3">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Agenda & Informasi -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <!-- Agenda -->
                <div class="col-lg-6" data-aos="fade-right">
                    <h3 class="mb-4">Agenda Sekolah</h3>
                    @php
                    $agendas = App\Models\Post::where('kategori_id', 2)
                    ->where('status', 'published')
                    ->with(['galery.fotos' => function($query) {
                    $query->latest()->take(1);
                    }])
                    ->latest()
                    ->take(3)
                    ->get();
                    @endphp

                    @foreach($agendas as $agenda)
                    <div class="news-card mb-3">
                        <div class="card border-0 shadow-sm">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    @if($agenda->galery && $agenda->galery->fotos->isNotEmpty())
                                    <img src="{{ Storage::url($agenda->galery->fotos->first()->file) }}"
                                        class="img-fluid rounded-start h-100 w-100 object-fit-cover"
                                        alt="{{ $agenda->judul }}">
                                    @else
                                    <div class="bg-secondary h-100 d-flex align-items-center justify-content-center rounded-start">
                                        <i class="fas fa-calendar fa-2x text-white"></i>
                                    </div>
                                    @endif
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="bg-primary text-white p-2 text-center rounded me-3">
                                                <h5 class="mb-0">{{ \Carbon\Carbon::parse($agenda->tanggal)->format('d') }}</h5>
                                                <small>{{ \Carbon\Carbon::parse($agenda->tanggal)->format('M') }}</small>
                                            </div>
                                            <h5 class="card-title mb-0">{{ $agenda->judul }}</h5>
                                        </div>
                                        <p class="card-text text-muted">{{ Str::limit(strip_tags($agenda->isi), 100) }}</p>
                                        <small class="text-muted">
                                            <i class="fas fa-user me-1"></i>
                                            {{ $agenda->author }}
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Informasi Terkini -->
                <div class="col-lg-6" data-aos="fade-left">
                    <h3 class="mb-4">Informasi Terkini</h3>
                    @php
                    $informasi = App\Models\Post::where('kategori_id', 1)
                    ->where('status', 'published')
                    ->with(['galery.fotos' => function($query) {
                    $query->latest()->take(1);
                    }])
                    ->latest()
                    ->take(3)
                    ->get();
                    @endphp

                    @foreach($informasi as $info)
                    <div class="news-card mb-3">
                        <div class="card border-0 shadow-sm">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    @if($info->galery && $info->galery->fotos->isNotEmpty())
                                    <img src="{{ Storage::url($info->galery->fotos->first()->file) }}"
                                        class="img-fluid rounded-start h-100 w-100 object-fit-cover"
                                        alt="{{ $info->judul }}">
                                    @else
                                    <div class="bg-info h-100 d-flex align-items-center justify-content-center rounded-start">
                                        <i class="fas fa-info-circle fa-2x text-white"></i>
                                    </div>
                                    @endif
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $info->judul }}</h5>
                                        <p class="card-text text-muted">{{ Str::limit(strip_tags($info->isi), 100) }}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <small class="text-muted">
                                                <i class="fas fa-user me-1"></i>
                                                {{ $info->author }}
                                            </small>
                                            <small class="text-muted">
                                                <i class="fas fa-calendar me-1"></i>
                                                {{ $info->created_at->format('d M Y') }}
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">Galeri Kegiatan</h2>
            <div class="row">
                @php
                $latestPhotos = [];
                $posts = App\Models\Post::where('kategori_id', 3)
                ->with(['galery.fotos' => function($query) {
                $query->latest();
                }])
                ->latest()
                ->take(2)
                ->get();

                foreach($posts as $post) {
                if($post->galery && $post->galery->fotos) {
                foreach($post->galery->fotos->take(3) as $foto) {
                $latestPhotos[] = [
                'judul' => $foto->judul,
                'file' => $foto->file,
                'galeri' => $post->judul
                ];
                }
                }
                }
                @endphp

                @foreach($latestPhotos as $foto)
                <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in">
                    <div class="gallery-item">
                        <a href="{{ Storage::url($foto['file']) }}"
                            data-lightbox="welcome-gallery"
                            data-title="{{ $foto['judul'] }}">
                            <img src="{{ Storage::url($foto['file']) }}"
                                class="img-fluid" alt="{{ $foto['judul'] }}">
                            <div class="gallery-caption">
                                <h5>{{ $foto['judul'] }}</h5>
                                <p>{{ $foto['galeri'] }}</p>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-4">
                <a href="{{ route('galeri') }}" class="btn btn-primary btn-lg" data-aos="fade-up">
                    Lihat Semua Foto
                </a>
            </div>
        </div>
    </section>

    <!-- Ganti bagian footer dengan include -->
    @include('partials.footer')

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            effect: 'fade',
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
</body>

</html>