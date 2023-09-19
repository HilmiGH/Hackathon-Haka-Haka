@extends('layouts.app')

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
        background-color: rgba(255, 255, 255, 0.9);
        padding: 20px;
        border-radius: 30px;
        box-shadow: 0 0 0 4px transparent, 0 0 0 8px linear-gradient(181deg, #EE8E3C -2.02%, #000 193.41%);
        margin: 10% auto;
        width: 432px;
        height: 400px;
        top: 60px;
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
                            <h4 style="font-weight: 900; font-size: 36px; text-align: center">Welcome Admin</h4>
                        </div>
                        <div class="mb-3">
                            <label style="color: #1E1E1E;; font-size: 20px; weight: 600; line-height: 30px" for="email" class="form-label">Username / Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>

                        <div class="mb-3">
                            <label style="color: #1E1E1E;; font-size: 20px; weight: 600; line-height: 30px" for="password" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" id="password" name="password" required autocomplete="current-password">
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">Remember Me</label>
                        </div>

                        <button type="submit" class="btn btn-primary">Login</button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
