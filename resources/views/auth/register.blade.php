@extends('layouts.app')

@section('content')
<style>
    /* CSS untuk latar belakang dengan gambar */
    body {
        background-image: url('{{ asset('img/bg login.svg') }}');
        background-repeat: no-repeat;
        background-position: center;
        background-color: #FFFFFF;
        background-size: cover;
        height: 100vh;
    }

    /* CSS untuk mengatur konten form registrasi */
    .register-content {
        background-color: white;
        padding: 20px;
        border-radius: 30px;
        margin: 10% auto;
        width: 500px;
        height: 550px;
        position: relative;
    }

    .register-content::before {
        content: "";
        position: absolute;
        top: -4px;
        right: -4px;
        bottom: -4px;
        left: -4px;
        border: 4px solid transparent;
        border-radius: 30px;
        background: linear-gradient(168deg, #D17323 0.97%, #000 158.49%);
        z-index: -1;
    }

</style>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card register-content">
                            <h4 style="font-weight: 900; font-size: 36px; text-align: center; background: linear-gradient(168deg, #D17323 0.97%, #000 158.49%); -webkit-background-clip: text; color: transparent;">Create An Account</h4>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <label style="color: #1E1E1E; font-size: 20px; font-weight: 600; line-height: 30px" for="name" class="form-label">{{ __('Nama') }}</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus
                                style="color: #1E1E1E; font-family: Lato; font-size: 16px; font-weight: 400; line-height: 26px;" required autocomplete="name" autofocus
                                placeholder="Masukkan nama Anda">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label style="color: #1E1E1E; font-size: 20px; font-weight: 600; line-height: 30px" for="email" class="form-label">{{ __('Alamat Email') }}</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                style="color: #1E1E1E; font-family: Lato; font-size: 16px; font-weight: 400; line-height: 26px;"
                                placeholder="Masukkan alamat email Anda">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label style="color: #1E1E1E; font-size: 20px; font-weight: 600; line-height: 30px" for="password" class="form-label">{{ __('Kata Sandi') }}</label>
                            <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password" autofocus
                                style="color: #1E1E1E; font-family: Lato; font-size: 16px; font-weight: 400; line-height: 26px;"
                                placeholder="Masukkan kata sandi Anda">
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label style="color: #1E1E1E; font-size: 20px; font-weight: 600; line-height: 30px" for="password-confirm" class="form-label">{{ __('Konfirmasi Kata Sandi') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autofocus
                                style="color: #1E1E1E; font-family: Lato; font-size: 16px; font-weight: 400; line-height: 26px;" required autocomplete="new-password"
                                placeholder="Konfirmasi kata sandi Anda">
                        </div>

                        <div class="mb-3">
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
