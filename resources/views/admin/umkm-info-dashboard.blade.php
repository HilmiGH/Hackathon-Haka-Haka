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
                    <p style="color: #1E1E1E; font-size: 20px; font-weight: 600; margin-bottom: 0px"></p>

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
                    <h1 style="font-weight: 900; font-size: 48px; margin-right: 30px; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                    background-clip: text;
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;">Profil UMKM</h1>
                </div>
                <div class="d-flex align-items-center" style="margin-bottom: 30px">
                    <div class="d-flex flex-column">
                        <img src="{{ asset('img/Dashboard-UMKM-Pic.png') }}" alt="">
                        <button class="btn" style="border-radius: 12px;
                        background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));">Ganti Foto Profil</button>
                    </div>
                    <form action=""></form>
                    <div class="d-flex">
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <div>
                                    <div>
                                        <label for="InputNamaUsaha" class="form-label">Nama Usaha</label>
                                        <input type="text" placeholder="Sugianto Konveksi" class="form-control" id="InputNamaUsaha" aria-describedby="emailHelp">    
                                    </div>
                                    <div>
                                        <label for="InputKatagori" class="form-label">Katagori Usaha</label>
                                        <select class="form-select" aria-label="Default select example" id="InputKatagori">
                                            <option selected>Pilih Katagori Usaha Anda</option>
                                            <option value="Makanan">Makanan</option>
                                            <option value="Minuman">Minuman</option>
                                            <option value="Kerajinan">Kerajinan</option>
                                            <option value="Jasa">Jasa</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="InputTanggalUsaha" class="form-label">Nama Usaha</label>
                                        <input type="date" placeholder="12/12/2023" class="form-control" id="InputTanggalUsaha" aria-describedby="emailHelp">    
                                    </div>
                                    <div>
                                        <label for="InputDeskripsiUsaha" class="form-label">Deskripsi Usaha</label>
                                        <textarea class="form-control" id="InputDeskripsiUsaha" rows="3"></textarea>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <label for="InputPemilikUsaha" class="form-label">Nama Usaha</label>
                                        <input type="text" placeholder="Sugianto" class="form-control" id="InputPemilikUsaha" aria-describedby="emailHelp">    
                                    </div>
                                    <div>
                                        <label for="InputWAUsaha" class="form-label">Nomor WhatsApp</label>
                                        <input type="text" placeholder="Sugianto" class="form-control" id="InputWAUsaha" aria-describedby="emailHelp">    
                                    </div>
                                    <div>
                                        <label for="InputIzinUsaha" class="form-label">Surat Izin Usaha</label>
                                        <input type="text" placeholder="Sugianto" class="form-control" id="InputIzinUsaha" aria-describedby="emailHelp">    
                                    </div>
                                    <div>
                                        <label for="InputAlamatUsaha" class="form-label">Alamat Usaha</label>
                                        <input type="text" placeholder="Sugianto" class="form-control" id="InputAlamatUsaha" aria-describedby="emailHelp">    
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn" style="border-radius: 12px;
                                background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));">Simpan</button>
                                <button>Batal</button>
                                <button class="btn" style="border-radius: 12px;
                                background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));">Edit Profile</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="" style="">
                    <h1 style="font-weight: 900; font-size: 48px; margin-right: 30px; width: fit-content; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 9.92%, #000AFF 107.06%));
                    background-clip: text;
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;">Produk UMKM</h1>
                    <table class="table table-bordered border-dark">
                        <thead>
                            <tr>
                                <th style="font-size: 30px; font-weight: 900; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                                background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">NO</th>
                                <th style="font-size: 30px; font-weight: 900; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                                background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">FOTO</th>
                                <th style="font-size: 30px; font-weight: 900; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                                background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">NAMA PRODUK</th>
                                <th style="font-size: 30px; font-weight: 900; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                                background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">KATAGORI</th>
                                <th style="font-size: 30px; font-weight: 900; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                                background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">STOK</th>
                                <th style="font-size: 30px; font-weight: 900; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                                background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php for ($i = 1; $i <= 10; $i++) { ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><img src="{{ asset('img/dashboard-product-img.png') }}" alt=""></td>
                                        <td>Nama Produk <?php echo $i; ?></td>
                                        <td>Katagori <?php echo $i; ?></td>
                                        <td>Stok <?php echo $i; ?></td>
                                        <td>
                                            <button class="btn" style="background-color: deepskyblue" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Button</button>
                                        </td>
                                    </tr>
                                <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Product</h1>
                </div>
                <div class="modal-body">
                    <div class="d-flex align-items-center" style="margin-bottom: 30px">
                        <div class="d-flex flex-column">
                            <img src="{{ asset('img/Dashboard-UMKM-Pic.png') }}" alt="">
                            <button class="btn" style="border-radius: 12px;
                            background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));">Ganti Foto Produk</button>
                        </div>
                        <form action=""></form>
                        <div class="d-flex">
                            <div class="d-flex flex-column">
                                <div class="d-flex flex-column">
                                    <div>
                                        <label for="InputNamaProduk" class="form-label">Nama Produk</label>
                                        <input type="text" placeholder="Batik Kenangan" class="form-control" id="InputNamaProduk" aria-describedby="NamaProductHelp">    
                                    </div>
                                    <div>
                                        <label for="InputJenisProduk" class="form-label">Jenis Produk</label>
                                        <input type="text" placeholder="Pakaian Pria" class="form-control" id="InputNamaProduk" aria-describedby="NamaProductHelp">    
                                    </div>
                                    <div>
                                        <label for="InputHargaProduk" class="form-label">Harga Produk</label>
                                        <input type="text" placeholder="Rp 20.000" class="form-control" id="InputHargaProduk" aria-describedby="emailHelp">    
                                    </div>
                                    <div>
                                        <label for="InputPemesananProduk" class="form-label">Nomor Pemesanan</label>
                                        <input type="text" placeholder="+6287223568788" class="form-control" id="InputPemesananProduk" aria-describedby="emailHelp">    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" style="border-radius: 12px; height: 45px;
                        background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="border-radius: 12px;
                    background: #FFF;
                    box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);">
                        <span style="text-align: center; height: 45px; font-size: 20px; font-weight: 600; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                        background-clip: text;
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;">Batal</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>

</body>
</html>
