@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <!-- Header -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Stats Cards -->
    <div class="row mb-4">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary h-100 py-2">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ App\Models\Post::count() }}</div>
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Post</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success h-100 py-2">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ App\Models\Post::where('status', 'published')->count() }}</div>
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Published</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check-circle fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning h-100 py-2">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ App\Models\Post::where('status', 'draft')->count() }}</div>
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Draft</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-edit fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info h-100 py-2">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ App\Models\Foto::count() }}</div>
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Foto</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-images fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Posts & Photos -->
    <div class="row">
        <!-- Recent Posts -->
        <div class="col-lg-8 mb-4">
            <div class="card shadow">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Post Terbaru</h6>
                    <a href="{{ route('admin.posts.create') }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-plus me-1"></i>Tambah Post
                    </a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(App\Models\Post::latest()->take(5)->get() as $post)
                                <tr>
                                    <td>{{ $post->judul }}</td>
                                    <td>
                                        @php
                                            $kategoriNama = [
                                                1 => 'Informasi',
                                                2 => 'Agenda',
                                                3 => 'Galeri'
                                            ][$post->kategori_id] ?? 'Tidak ada kategori';

                                            $kategoriClass = [
                                                1 => 'info',
                                                2 => 'warning',
                                                3 => 'success'
                                            ][$post->kategori_id] ?? 'secondary';
                                        @endphp
                                        <span class="badge bg-{{ $kategoriClass }}">
                                            {{ $kategoriNama }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge bg-{{ $post->status == 'published' ? 'success' : 'warning' }}">
                                            {{ $post->status }}
                                        </span>
                                    </td>
                                    <td>{{ $post->created_at->format('d M Y') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Photos -->
        <div class="col-lg-4 mb-4">
            <div class="card shadow">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Foto Terbaru</h6>
                    <a href="{{ route('admin.foto.create') }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-upload me-1"></i>Upload
                    </a>
                </div>
                <div class="card-body">
                    <div class="row g-2">
                        @foreach(App\Models\Foto::latest()->take(6)->get() as $foto)
                        <div class="col-4">
                            <a href="{{ Storage::url($foto->file) }}" data-lightbox="recent-photos">
                                <img src="{{ Storage::url($foto->file) }}" 
                                     class="img-fluid rounded" 
                                     alt="{{ $foto->judul }}"
                                     style="height: 80px; width: 100%; object-fit: cover;">
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
<style>
.card {
    border: none;
    transition: all 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
}

.border-left-primary { border-left: 4px solid #4e73df; }
.border-left-success { border-left: 4px solid #1cc88a; }
.border-left-warning { border-left: 4px solid #f6c23e; }
.border-left-info { border-left: 4px solid #36b9cc; }
</style>
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
@endpush
@endsection 