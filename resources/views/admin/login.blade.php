@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="login-container">
    <div class="login-row">
        <div class="login-left">
            <!-- Floating Shapes -->
            <div class="floating-shapes">
                <div></div>
                <div></div>
                <div></div>
            </div>

            <div class="login-form">
                <div class="text-center mb-4">
                    <img src="{{ asset('images/logo-sekolah.svg') }}" alt="Logo" class="school-logo">
                </div>

                <div class="welcome-text">
                    <h4>Selamat Datang!</h4>
                    <p>Silakan login untuk melanjutkan</p>
                </div>

                @if(session('error'))
                <div class="alert alert-danger">
                    <i class="fas fa-exclamation-circle me-2"></i>
                    {{ session('error') }}
                </div>
                @endif

                <form action="{{ route('admin.login.post') }}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('username') is-invalid @enderror" 
                               id="username" name="username" placeholder="Username" 
                               value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" 
                               id="password" name="password" placeholder="Password">
                        <label for="password">Password</label>
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-login btn-primary">
                        <i class="fas fa-sign-in-alt me-2"></i>Login
                    </button>
                </form>
            </div>
        </div>
        <div class="login-right">
            <h2 class="mb-4">SMKN 4 Bogor</h2>
            <p class="lead">Siap Kerja, Mandiri, dan Kreatif</p>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
.school-logo {
    width: 80px;
    height: 80px;
    margin-bottom: 20px;
}

.login-row {
    display: flex;
    flex-wrap: wrap;
}

.login-left {
    flex: 1;
    padding: 50px;
    position: relative;
}

.login-right {
    flex: 1;
    background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), 
                url('{{ asset("images/school-bg.jpg") }}');
    background-size: cover;
    background-position: center;
    padding: 50px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: white;
    text-align: center;
}

.floating-shapes div {
    position: absolute;
    width: 60px;
    height: 60px;
    background: rgba(78,115,223,0.1);
    border-radius: 50%;
    animation: float 15s infinite linear;
}

.floating-shapes div:nth-child(1) {
    top: 10%;
    left: 10%;
    animation-delay: 0s;
}

.floating-shapes div:nth-child(2) {
    top: 20%;
    right: 20%;
    animation-delay: 2s;
    width: 40px;
    height: 40px;
}

.floating-shapes div:nth-child(3) {
    bottom: 20%;
    left: 15%;
    animation-delay: 4s;
    width: 50px;
    height: 50px;
}

@keyframes float {
    0% { transform: translate(0, 0) rotate(0deg); }
    50% { transform: translate(20px, 20px) rotate(180deg); }
    100% { transform: translate(0, 0) rotate(360deg); }
}
</style>
@endpush 