@extends('layouts.app')
@section('title', 'Login')
@section('content')
<style>
    /* CSS untuk latar belakang dengan gambar */
    body {
        background-image: url('{{ asset('img/bg login.svg') }}');
        background-repeat: no-repeat;
        background-position: center;
        background-color: #FFFFFF;
        background-size: cover; /* Mengisi seluruh halaman */
        height: 100vh; /* Mengatur tinggi elemen body sama dengan tinggi layar (viewport) */
    }

    /* CSS untuk mengatur konten form login */
    .login-content {
        background-color: white; /* Warna latar belakang putih */
        padding: 20px;
        border-radius: 30px;
        margin: 10% auto;
        width: 432px;
        height: 400px;
        position: relative; /* Menggunakan posisi relatif untuk menempatkan box shadow */
    }

    .login-content::before {
        content: "";
        position: absolute;
        top: -4px; /* Ubah ini untuk mengatur jarak antara border dan linear gradient */
        right: -4px; /* Ubah ini untuk mengatur jarak antara border dan linear gradient */
        bottom: -4px; /* Ubah ini untuk mengatur jarak antara border dan linear gradient */
        left: -4px; /* Ubah ini untuk mengatur jarak antara border dan linear gradient */
        border: 4px solid transparent; /* Border transparan dengan ketebalan 4px */
        border-radius: 30px; /* Radius border */
        background: linear-gradient(168deg, #D17323 0.97%, #000 158.49%); /* Efek linear gradient pada border */
        z-index: -1; /* Mengatur z-index untuk membuat latar belakang tetap di belakang */
    }


</style>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card login-content">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Form Login -->
                        <div class="mb-3">
                            <h4 style="font-weight: 900; font-size: 36px; text-align: center; background: linear-gradient(168deg, #D17323 0.97%, #000 158.49%); -webkit-background-clip: text; color: transparent;">Welcome Admin</h4>
                        </div>
                        <div class="mb-3">
                            <label style="color: #1E1E1E; font-size: 20px; font-weight: 600; line-height: 30px" for="email" class="form-label">Username / Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                style="color: #1E1E1E; font-family: Lato; font-size: 16px; font-weight: 400; line-height: 26px;"
                                placeholder="Masukkan username/email anda disini">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label style="color: #1E1E1E; font-size: 20px; font-weight: 600; line-height: 30px" for="password" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" id="password" name="password" required autocomplete="current-password"
                                style="color: #1E1E1E; font-family: Lato; font-size: 16px; font-weight: 400; line-height: 26px;"
                                placeholder="Masukkan kata sandi anda disini">
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>
                            <button type="submit" class="btn btn-primary" style="border: none; outline: none; background: linear-gradient(168deg, #D17323 0.97%, #000 158.49%); width: 120px; height: 40px;">
                                <span style="color: #FFF; font-family: 'Lato', sans-serif; font-size: 20px; font-weight: 700; line-height: normal;">
                                    Masuk
                                </span>
                            </button>


                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
