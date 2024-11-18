@extends('layouts.main')

@section('title', 'Profil')

@section('content')
<!-- Header -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold text-white mb-4" data-aos="fade-up">Profil SMKN 4 Bogor</h1>
            </div>
        </div>
    </div>
</div>

<!-- Visi Misi -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="mb-4">Visi</h2>
                <div class="vision-box p-4 bg-light rounded shadow-sm">
                    <p class="lead mb-0">
                        "Menjadi SMK yang unggul dalam menghasilkan lulusan yang berkarakter, kompeten, dan siap bersaing di era global"
                    </p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4">Misi</h2>
                <ul class="mission-list">
                    <li>Menyelenggarakan pendidikan karakter yang terintegrasi dalam pembelajaran</li>
                    <li>Mengembangkan kompetensi siswa sesuai dengan kebutuhan industri</li>
                    <li>Meningkatkan kualitas pembelajaran berbasis teknologi</li>
                    <li>Memperkuat kerjasama dengan dunia usaha dan industri</li>
                    <li>Membangun jiwa kewirausahaan dan kemandirian siswa</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Sejarah -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <img src="{{ asset('images/logo-sekolah.svg') }}" alt="SMKN 4 Bogor" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4">Sejarah SMKN 4 Bogor</h2>
                <p class="text-muted">
                    SMKN 4 Bogor didirikan pada tahun [tahun pendirian] dengan komitmen untuk menghasilkan lulusan yang berkualitas dan siap kerja. Sejak awal berdirinya, sekolah ini telah mengalami berbagai perkembangan signifikan dalam hal fasilitas, program keahlian, dan prestasi.
                </p>
                <p class="text-muted">
                    Dengan dukungan tenaga pengajar yang profesional dan fasilitas pembelajaran yang modern, SMKN 4 Bogor terus berkomitmen untuk memberikan pendidikan berkualitas bagi generasi muda Indonesia.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Fasilitas -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Fasilitas</h2>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="facility-card">
                    <div class="facility-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h4>Lab Komputer</h4>
                    <p>Dilengkapi dengan komputer terbaru dan software industri</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="facility-card">
                    <div class="facility-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h4>Bengkel Praktik</h4>
                    <p>Peralatan lengkap untuk praktik kejuruan</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="facility-card">
                    <div class="facility-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h4>Perpustakaan</h4>
                    <p>Koleksi buku lengkap dan ruang baca nyaman</p>
                </div>
            </div>
        </div>
    </div>
</section>

@push('styles')
<style>
.page-header {
    background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('{{ asset("images/header-bg.jpg") }}');
    background-size: cover;
    background-position: center;
    padding: 150px 0 100px;
    margin-bottom: 0;
}

.vision-box {
    border-left: 5px solid #4e73df;
}

.mission-list {
    list-style: none;
    padding: 0;
}

.mission-list li {
    padding: 10px 0 10px 30px;
    position: relative;
}

.mission-list li:before {
    content: '\f00c';
    font-family: 'Font Awesome 5 Free';
    font-weight: 900;
    position: absolute;
    left: 0;
    top: 12px;
    color: #4e73df;
}

.facility-card {
    background: white;
    padding: 30px;
    border-radius: 15px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.facility-card:hover {
    transform: translateY(-10px);
}

.facility-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(45deg, #4e73df, #224abe);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 32px;
}

.facility-card h4 {
    margin-bottom: 15px;
    color: #2c3e50;
}

.facility-card p {
    color: #6c757d;
    margin: 0;
}

img {
    max-width: 100%;
    height: auto;
}

@media (max-width: 768px) {
    .page-header {
        padding: 100px 0 70px;
    }
    
    .facility-card {
        margin-bottom: 30px;
    }
}
</style>
@endpush
@endsection 