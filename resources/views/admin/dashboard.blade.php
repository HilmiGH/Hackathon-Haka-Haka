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

        padding: 20px;
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

                @php
                $user = auth()->user();
                @endphp
                <div style="display: inline-block; margin-right: 10px">
                    <p style="color: #1E1E1E; font-size: 20px; font-weight: 600; margin-bottom: 0px">{{ ($user->name) }}</p>


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
                <div class="d-flex align-items-center" style="margin-bottom: 30px">
                    <h1 style="font-weight: 900; font-size: 48px; margin-right: 30px">Ringkasan Usaha</h1>
                    <div class="">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-secondary active">Button 1</button>
                            <button type="button" class="btn btn-secondary">Button 2</button>
                            <button type="button" class="btn btn-secondary">Button 3</button>
                            <button type="button" class="btn btn-secondary">Button 4</button>
                        </div>
                    </div>
                </div>
                <div class="d-flex" style="gap: 30px; margin-bottom: 30px">
                    <div style="background-color: white; padding: 10px; border-radius: 15px">
                        <h4>Total Pendapatan</h4>
                        <h4>Rp{{ number_format(\App\Models\Transaksi::sum('total_harga'), 0, ',', '.') }}</h4>
                        @php
                            $totalHariKemarin = // Anda dapat mengganti ini dengan logika untuk menghitung total hari kemarin
                            $totalHariIni = \App\Models\Transaksi::sum('total_harga');
                            $perbedaan = $totalHariIni - $totalHariKemarin;
                            $persentasePerbedaan = ($perbedaan / $totalHariKemarin) * 100;
                        @endphp
                        <h6>
                            @if ($persentasePerbedaan > 0)
                                {{ number_format($persentasePerbedaan, 2) }}% lebih dari hari kemarin
                            @elseif ($persentasePerbedaan < 0)
                                {{ number_format(abs($persentasePerbedaan), 2) }}% kurang dari hari kemarin
                            @else
                                Tidak ada perubahan dari hari kemarin
                            @endif
                        </h6>

                    </div>
                    <div style="background-color: white; padding: 10px; border-radius: 15px">
                        <h4>Total Penjualan</h4>
                        <h4>{{ \App\Models\DetailKeranjang::sum('jumlah_produk') }} Pcs</h4>
                        <h6>10% kurang dari hari kemarin</h6>
                    </div>
                    <div style="background-color: white; padding: 10px; border-radius: 15px">
                        <h4>Total Transaksi</h4>
                        <h4>{{ \App\Models\Transaksi::count() }} Transaksi</h4>
                        <h6>20% lebih dari hari kemarin</h6>
                    </div>
                    <div style="background-color: white; padding: 10px; border-radius: 15px">
                        <h4>Total Pelanggan</h4>
                        <h4>X Pelanggan</h4>
                        <h6>20% lebih dari hari kemarin</h6>
                    </div>

                </div>
                <div class="d-flex" style="gap: 30px; margin-bottom: 30px;">
                    <div class="" style="width: 600px ; height: 410px ; background-color: white; border-radius: 10px">
                        <h2><strong>Chart Pertumbuhan Pendapatan Usaha</strong></h2>
                    </div>
                    <div class="" style=" width: 400px ; height: 410px ; background-color: white; border-radius: 10px">
                        <h2><strong>Chart Volume Pelanggan</strong></h2>
                    </div>
                </div>
                <div class="d-flex" style="gap: 30px; margin-bottom: 30px;">
                    <div style="max-width: 800px; background-color: white; padding: 20px">
                        <h2>Transaksi Terkini</h2>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID order</th>
                                    <th>Produk/Layanan</th>
                                    <th>Total Harga</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 1; $i <= 11; $i++) { ?>
                                    <tr>
                                        <td>KM 001</td>
                                        <td class="d-flex">
                                            <img src="{{ asset('img/dashboard-product-img.png') }}" alt="">
                                            <div>
                                                <p style="margin-bottom: 0px">Brown Trifold Wallet</p>
                                                <p style="margin-bottom: 0px">12 items</p>
                                            </div>
                                        </td>
                                        <td>Rp 100.000</td>
                                        <td>12-09-2023</td>
                                        <td>Sukses</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div style="max-width: 1000px; background-color: white; padding: 20px">
                        <h2>Top Produk</h2>
                        <table class="table table-bordered">
                            <tbody>
                                @foreach($topProducts->take(10) as $topProduct)
                                    <tr>
                                        <td class="d-flex">
                                            <img src="{{ asset('img/dashboard-product-img.png') }}" alt="">
                                            <div>
                                                <p style="margin-bottom: 0px">Product ID: {{ $topProduct->produk_id }}</p>
                                                <p style="margin-bottom: 0px">Total Pembelian: {{ $topProduct->total_pembelian }} items</p>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
