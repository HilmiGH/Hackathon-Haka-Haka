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

    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
    <style>
        /* Warna untuk garis dan titik pada grafik */
        .chartjs-line-color {
            border-color: #944604 !important;
        }

        /* Warna latar belakang area dalam grafik */
        .chartjs-area-color {
            background-color: rgba(242, 212, 187, 0.5) !important;
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
                            <button type="button" class="btn btn-secondary active">Harian</button>
                            <button type="button" class="btn btn-secondary">Mingguan</button>
                            <button type="button" class="btn btn-secondary">Bulanan</button>
                            <button type="button" class="btn btn-secondary">Tahunan</button>
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
                        <h4>{{ \App\Models\Pelanggan::count() }} Pelanggan</h4>
                        <h6>20% lebih dari hari kemarin</h6>
                    </div>

                </div>
                <div class="d-flex" style="gap: 30px; margin-bottom: 30px;">
                    <div class="" style="width: 600px; height: 410px; background-color: white; border-radius: 10px">
                        <h2><strong>Chart Pertumbuhan Pendapatan Usaha</strong></h2>
                        <div class="chart-container">
                            <canvas id="myBarChart"></canvas>
                        </div>
                    </div>
                    <div class="" style="width: 450px; height: 500px; background-color: white; border-radius: 10px">
                        <h2><strong>Chart Volume Pelanggan</strong></h2>
                        <canvas id="myPieChart"></canvas>
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
                                @php
                                $transaksis = DB::table('transaksis')
                                    ->select(
                                        'transaksis.id',
                                        'transaksis.total_harga',
                                        'transaksis.created_at',
                                        'transaksis.status_transaksi'
                                    )
                                    ->orderByDesc('transaksis.created_at')
                                    ->take(10)
                                    ->get();
                                @endphp

                                @foreach($transaksis as $transaksi)
                                    <tr>
                                        <td>{{ $transaksi->id }}</td>
                                        <td>
                                            @php
                                            $namaProduk = DB::table('detail_keranjang')
                                                ->whereIn('id_keranjang', function($query) use ($transaksi) {
                                                    $query->select('id_keranjang')
                                                        ->from('transaksis')
                                                        ->where('id', $transaksi->id);
                                                })
                                                ->pluck('nama_produk')
                                                ->implode('<br>');
                                            @endphp
                                            {!! $namaProduk !!}
                                        </td>
                                        <td>Rp {{ number_format($transaksi->total_harga, 0, ',', '.') }}</td>
                                        <td>
                                            @if ($transaksi->created_at instanceof \Carbon\Carbon)
                                                {{ $transaksi->created_at->format('d-m-Y') }}
                                            @else
                                                {{ $transaksi->created_at }}
                                            @endif
                                        </td>
                                        <td>{{ $transaksi->status_transaksi }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
                    <div style="max-width: 1000px; background-color: white; padding: 20px">
                        <h2>Top Produk</h2>
                        <table class="table table-bordered">
                            <tbody>
                                @php
                                $topProducts = DB::table('detail_keranjang')
                                    ->select('nama_produk', DB::raw('SUM(jumlah_produk) as total_pembelian'))
                                    ->groupBy('nama_produk')
                                    ->orderByDesc('total_pembelian')
                                    ->take(10)
                                    ->get();
                                @endphp

                                @foreach($topProducts as $topProduct)
                                    <tr>
                                        <td class="d-flex">
                                            <img src="{{ asset('img/dashboard-product-img.png') }}" alt="">
                                            <div>
                                                <p style="margin-bottom: 0px">{{ $topProduct->nama_produk }}</p>
                                                <p style="margin-bottom: 0px">{{ $topProduct->total_pembelian }} items</p>
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
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var ctx = document.getElementById('myPieChart').getContext('2d');
            var dataPelanggan = {!! json_encode(['Pelanggan Laki-laki' => $jumlahLakiLaki, 'Pelanggan Perempuan' => $jumlahPerempuan]) !!};
            var totalPelanggan = dataPelanggan['Pelanggan Laki-laki'] + dataPelanggan['Pelanggan Perempuan'];
            var warnaPelangganLakiLaki = '#944604';
            var warnaPelangganPerempuan = '#F2D4BB';

            var data = {
                labels: Object.keys(dataPelanggan),
                datasets: [{
                    data: Object.values(dataPelanggan),
                    backgroundColor: [warnaPelangganLakiLaki, warnaPelangganPerempuan],
                    borderWidth: 1
                }]
            };

            var options = {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '70%'
            };

            var myPieChart = new Chart(ctx, {
                type: 'doughnut',
                data: data,
                options: options
            });

            var centerX = ctx.canvas.width / 2;
            var centerY = ctx.canvas.height / 2;

            ctx.font = '32px Lato, Arial';
            ctx.fillStyle = '#000'; // Warna teks hitam
            ctx.textAlign = 'center'; // Teks di tengah
            ctx.textBaseline = 'middle'; // Teks di tengah

            var lakiLakiPercentage = ((dataPelanggan['Pelanggan Laki-laki'] / totalPelanggan) * 100).toFixed(2);
            var perempuanPercentage = ((dataPelanggan['Pelanggan Perempuan'] / totalPelanggan) * 100).toFixed(2);

            ctx.fillText(`${lakiLakiPercentage}% Laki-laki`, centerX, centerY - 15);
            ctx.fillText(`${perempuanPercentage}% Perempuan`, centerX, centerY + 15);
        });
    </script>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Data untuk bar chart
    var data = {
        labels: [], // Label tanggal
        datasets: [{
            label: 'Pendapatan',
            data: [], // Data total pendapatan per tanggal
            backgroundColor: [], // Warna batang chart
            borderColor: [], // Warna border batang chart
            borderWidth: 1, // Lebar border batang chart
        }]
    };

    @php
        // Mendapatkan data total pendapatan dari PHP
        $totalPendapatanPerTanggal = []; // Inisialisasi array untuk total pendapatan per tanggal
        $warnaBatangChart = []; // Inisialisasi array untuk warna batang chart
        $tanggalTransaksi = DB::table('transaksis')
            ->selectRaw('DATE(created_at) as tanggal')
            ->groupBy('tanggal')
            ->orderBy('tanggal')
            ->pluck('tanggal');

        foreach ($tanggalTransaksi as $tanggal) {
            // Mengambil data transaksi untuk tanggal yang sama
            $totalPendapatan = DB::table('transaksis')
                ->whereDate('created_at', $tanggal)
                ->sum('total_harga');

            // Menyimpan total pendapatan per tanggal ke dalam array
            $totalPendapatanPerTanggal[] = $totalPendapatan;

            // Menyimpan warna batang chart (misalnya, #944604) ke dalam array
            $warnaBatangChart[] = '#944604';
        }

        // Mengonversi PHP array ke JavaScript
        $totalPendapatanJS = json_encode($totalPendapatanPerTanggal);
        $warnaBatangChartJS = json_encode($warnaBatangChart);
        $tanggalTransaksiJS = json_encode($tanggalTransaksi);
    @endphp

    // Mengganti label pada data dengan label tanggal yang sudah dihasilkan
    data.labels = {!! $tanggalTransaksiJS !!};
    data.datasets[0].data = {!! $totalPendapatanJS !!};
    data.datasets[0].backgroundColor = {!! $warnaBatangChartJS !!}; // Mengatur warna batang chart

    // Konfigurasi bar chart
    var options = {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            x: {
                title: {
                    display: true,
                    text: 'Tanggal',
                },
            },
            y: {
                beginAtZero: true,
                title: {
                    display: true,
                    text: 'Pendapatan',
                },
            },
        },
    };

    // Membuat bar chart dengan Chart.js
    var ctx = document.getElementById('myBarChart').getContext('2d');
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: options
    });
</script>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>

</body>
</html>
