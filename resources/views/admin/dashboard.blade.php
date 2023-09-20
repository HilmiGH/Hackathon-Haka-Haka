<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
    * {
    font-family: Lato;
    
    }

    .dashboard-container {
      display: flex;
    }
  
    .navbar-side {
        flex: 0 0 300px;
        background-color: #FFFFFF;
    }

    .navbar-top,
    .dashboard {
    flex: 1;
    }

    .dashboard {
        

        background-image: url('{{ asset('img/bg login.svg') }}');
        background-repeat: no-repeat;
        background-position: center;
        background-color: #FFFFFF;
        background-size: cover;
    }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <aside class="navbar-side" style="box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.50); position: relative;">
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
        <div style="">
            <nav class="navbar-top" style="z-index: 50 ;box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.50); padding-block: 10px; position: relative; width: ">
                <form class="d-flex" role="search" style="display: inline-block!important; margin-left: 300px">
                    <input class="form-control me-2" type="search" placeholder="Ketikkan Pencarian Anda Disini" aria-label="Search" style="width: 300px">
                    <button class="btn btn-outline-success" type="submit" style="display: none">Search</button>
                </form>
                <div style="display: inline-block;">
                    <p style="margin-bottom: 0px">Lee Cheng Kwan</p>
                    <p style="margin-bottom: 0px">Admin Toko</p>
                </div>
                <div style="display: inline-block;">
                    <img src="" alt="">
                </div style="display: inline-block;">
                <button style="display: inline-block;">
                    <img src="" alt="">
                </button>
            </nav>
            <div class="dashboard">
                <h1>THIS IS MAIN</h1>
                <h1>THIS IS MAIN</h1>
                <h1>THIS IS MAIN</h1>
                <h1>THIS IS MAIN</h1>
                <h1>THIS IS MAIN</h1>
                <h1>THIS IS MAIN</h1>
                <h1>THIS IS MAIN</h1>
                <h1>THIS IS MAIN</h1>
                <h1>THIS IS MAIN</h1>
                <h1>THIS IS MAIN</h1>
                <h1>THIS IS MAIN</h1>
                <h1>THIS IS MAIN</h1>
                <h1>THIS IS MAIN</h1>
                <h1>THIS IS MAIN</h1>
                <h1>THIS IS MAIN</h1>
            </main>
        </div>
    </div>
</body>
</html>