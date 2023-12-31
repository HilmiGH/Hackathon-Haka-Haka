<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dashboard Admin') }}</title>

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    {{-- Lato --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Reenie+Beanie&display=swap" rel="stylesheet">

    <style>
    * {
    font-family: Lato;

    }

    .dashboard-container {
      display: flex;
    }

    .navbar-side {
        flex: 1;
    }

    .navbar-top,
    .dashboard {
    flex: 5;
    }

    .dashboard {
            background-image: url('{{ asset('img/bg login.svg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-color: #FFFFFF;
            background-size: cover;
            
            display: flex; /* Add flex display to the dashboard */
            flex-direction: row; /* Horizontal arrangement */
            justify-content: space-between; /* Space between dashboard-pos-left and dashboard-pos-right */
        }
        .dashboard-pos-left {
            padding: 20px;
            flex: 75%; /* 70% width for dashboard-pos-left */
        }
        .dashboard-pos-right {
            padding-inline: 20px;
            padding-block: 30px;
            flex: 25%; /* 30% width for dashboard-pos-right */
        }
    </style>
</head>
<body style="margin: 0; padding: 0;">
    <div class="dashboard-container">
        <aside class="navbar-side" style="box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.50); position: relative; max-width: 300px">
            <nav class="nav flex-column " style="padding: 20px">
                <img src="{{ asset('img/Karsa-Guna-Dashboard-Logo.png') }}" alt="" style="width: 200px">
                <hr>
                <p>FITUR DASHBOARD</p>
                <a class="nav-link active" aria-current="page" href="#">
                    <img src="" alt="">
                    <span>Ringkasan</span>
                </a>
                <a class="nav-link" href="#">
                    <img src="" alt="">
                    <span>Produk</span>
                </a>
                <a class="nav-link" href="#">
                    <img src="" alt="">
                    <span>Pelanggan</span>
                </a>
                <a class="nav-link" href="#">
                    <img src="" alt="">
                    <span>Statistik</span>
                </a>
                <a class="nav-link" href="#">
                    <img src="" alt="">
                    <span>Transaksi</span>
                </a>
                <a class="nav-link" href="#">
                    <img src="" alt="">
                    <span>Point of Sale</span>
                </a>
                <hr>
                <p>FITUR GENERAL</p>
                <a class="nav-link" href="#">
                    <img src="" alt="">
                    <span>Pengaturan</span>
                </a>
                <a class="nav-link" href="#">
                    <img src="" alt="">
                    <span>Bantuan</span>
                </a>
                <a class="nav-link" href="#">
                    <img src="" alt="">
                    <span>Keluar</span>
                </a>
            </nav>
        </aside>
        <div style="width: 100%">
            <nav class="navbar-top d-flex align-items-center" style="z-index: 50 ;box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.50); padding-block: 10px; position: relative; width: 100%;">
                <form class="d-flex" role="search" style="display: inline-block!important; margin-left: 400px; margin-right: 150px">
                    <input class="form-control me-2" type="search" placeholder="Ketikkan Pencarian Anda Disini" aria-label="Search" style="width: 300px">
                    <button class="btn btn-outline-success" type="submit" style="display: none">Search</button>
                </form>

                <div style="display: inline-block; margin-right: 10px">

                    <p style="margin-bottom: 0px; font-size: 12px; font-style: normal; font-weight: 700; text-align: right">Admin Toko</p>
                </div>
                <div style="display: inline-block; margin-right: 10px">
                    <img src="{{ asset('img/dashboard-profile-logo.png') }}" alt="">
                </div style="display: inline-block;">
                <button style="display: inline-block; background-color: transparent; border: 0px">
                    <img src="{{ asset('img/Dashboard-Notif-Logo.png') }}" alt="">
                </button>
            </nav>
            <div class="dashboard">
                <div class="dashboard-pos-left d-flex flex-column" style="margin-bottom: 30px">
                    <div class="d-flex align-items-center">
                        <h1 style="font-weight: 900; font-size: 48px; margin-right: 60px">Point of Sale</h1>
                        <form class="d-flex" role="search" style="display: inline-block!important; margin-right: 10px">
                            <input class="form-control me-2" type="search" placeholder="Ketikkan Pencarian Anda Disini" aria-label="Search" style="width: 300px">
                            <button class="btn btn-outline-success" type="submit" style="display: none">Search</button>
                        </form>
                        <button type="button" class="btn btn-light">
                            <img style="width: 30px; height: 30px" src="{{ asset('img/Dashboard-POS-Setting-Logo.png') }}" alt="">
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top mx-auto" src="{{ asset('img/produk.png') }}" alt="Card image"
                                    style="width:90%;margin-top:5%">
                                <div class="card-body">
                                    <p class="card-text">Fashion Pria</p>
                                    <h4 class="card-title"><b>Brown Trifold Wall</b></h4>
                                    <p> <span style="text-decoration: line-through; color: gray;">Rp200.000</span>
                                        <span style="color: red;">Rp100.000</span>
                                    </p>
                                    <a href="#" class="btn btn-custom w-100">See Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top mx-auto" src="{{ asset('img/produk.png') }}" alt="Card image"
                                    style="width:90%;margin-top:5%">
                                <div class="card-body">
                                    <p class="card-text">Fashion Pria</p>
                                    <h4 class="card-title"><b>Brown Trifold Wall</b></h4>
                                    <p> <span style="text-decoration: line-through; color: gray;">Rp200.000</span>
                                        <span style="color: red;">Rp100.000</span>
                                    </p>
                                    <a href="#" class="btn btn-custom w-100">See Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top mx-auto" src="{{ asset('img/produk.png') }}" alt="Card image"
                                    style="width:90%;margin-top:5%">
                                <div class="card-body">
                                    <p class="card-text">Fashion Pria</p>
                                    <h4 class="card-title"><b>Brown Trifold Wall</b></h4>
                                    <p> <span style="text-decoration: line-through; color: gray;">Rp200.000</span>
                                        <span style="color: red;">Rp100.000</span>
                                    </p>
                                    <a href="#" class="btn btn-custom w-100">See Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dashboard-pos-right" style="background-color: white">
                    <h1 style="font-weight: 900; font-size: 48px; margin-right: 30px">Keranjang</h1>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
