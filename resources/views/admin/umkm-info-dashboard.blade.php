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

    {{-- Lato --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Reenie+Beanie&display=swap" rel="stylesheet">

    <style>
    * {
    font-family: Lato;

    }
    button:disabled {
    color: #fff !important; /* Warna teks putih dengan !important */
    background-color: #030000 !important; /* Warna latar belakang abu-abu dengan !important */
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

    .save-cancel-buttons {
        display: none;
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
                <div>
                    <button></button>
                </div>
                <div class="d-flex align-items-center" style="margin-bottom: 30px">
                    <div class="d-flex flex-column">
                        <img src="{{ asset('img/Dashboard-UMKM-Pic.png') }}" alt="">
                        <button id="gantiFotoButton" class="btn" style="border-radius: 12px; height: 45px;
                        background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%)); display: none;">Ganti Foto Profil</button>
                    </div>
                    <div class="d-flex">

                        <div class="d-flex flex-column">
                            <div class="d-flex flex-row">
                                <div>
                                    <div>
                                        <label for="InputNamaUsaha" class="form-label">Nama Usaha</label>
                                        <input type="text" value="{{ DB::table('umkms')->where('id_umkm', request()->query('id'))->value('nama_usaha') }}" class="form-control" id="InputNamaUsaha" aria-describedby="emailHelp" disabled>
                                    </div>

                                    <div>
                                        <label for="InputKatagori" class="form-label">Kategori Usaha</label>
                                        <select class="form-select" aria-label="Default select example" id="InputKatagori" disabled>
                                            <option value="" disabled>Pilih Kategori Usaha Anda</option>
                                            <option value="Makanan">Makanan</option>
                                            <option value="Minuman">Minuman</option>
                                            <option value="Kerajinan">Kerajinan</option>
                                            <option value="Jasa">Jasa</option>
                                        </select>

                                        <script>
                                        window.addEventListener('DOMContentLoaded', function () {
                                            var selectElement = document.getElementById('InputKatagori');
                                            var selectedValue = "{{ DB::table('umkms')->where('id_umkm', request()->query('id'))->value('kategori_usaha') }}";

                                            // Mengatur nilai seleksi pada elemen <select>
                                            for (var i = 0; i < selectElement.options.length; i++) {
                                                if (selectElement.options[i].value === selectedValue) {
                                                    selectElement.options[i].selected = true;
                                                    break;
                                                }
                                            }
                                        });
                                        </script>

                                    </div>

                            <div>
                                <label for="InputDeskripsiUsaha" class="form-label">Deskripsi Usaha</label>
                                <textarea disabled class="form-control" id="InputDeskripsiUsaha" rows="2">
                                    {{ DB::table('umkms')->where('id_umkm', request()->query('id'))->value('deskripsi_usaha') }}
                                </textarea>
                            </div>

                                </div>
                                <div>
                                    <div>
                                        <label for="InputPemilikUsaha" class="form-label">Nama Pemilik</label>
                                        <input type="text" disabled value="{{ DB::table('umkms')->where('id_umkm', request()->query('id'))->value('nama_pemilik') }}" class="form-control" id="InputPemilikUsaha" aria-describedby="emailHelp">
                                    </div>

                                    <div>
                                        <label for="InputWAUsaha" class="form-label">Nomor WhatsApp</label>
                                        <input type="text" disabled value="{{ DB::table('produks')->where('id_umkm', request()->query('id'))->value('nomor_pemesanan') }}" class="form-control" id="InputWAUsaha" aria-describedby="emailHelp">
                                    </div>
                                    <div>
                                        <label for="InputIzinUsaha" class="form-label">Surat Izin Usaha</label>
                                        <input type="text" disabled value="{{ DB::table('umkms')->where('id_umkm', request()->query('id'))->value('surat_izin_usaha') }}" class="form-control" id="InputIzinUsaha" aria-describedby="emailHelp">
                                    </div>
                                    <div>
                                        <label for="InputAlamatUsaha" class="form-label">Alamat Usaha</label>
                                        <input type="text" disabled value="{{ DB::table('umkms')->where('id_umkm', request()->query('id'))->value('alamat_usaha') }}" class="form-control" id="InputAlamatUsaha" aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button id="editProfileButton" class="btn" style="border-radius: 12px; height: 45px;
                                background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));">Edit Profile</button>
                            <button id="simpanButton" class="btn" style="border-radius: 12px; height: 45px;
                                background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%)); display: none;">Simpan</button>
                            <button id="batalButton" type="button" class="btn btn-secondary" style="border-radius: 12px;
                                background: #FFF; color: #000; box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15); display: none;">Batal</button>


                            <script>
                            // Fungsi untuk menampilkan tombol "Edit Profile" dan menyembunyikan "Simpan", "Batal", dan "Ganti Foto Profil"
                            function showEditProfileButton() {
                                document.getElementById('simpanButton').style.display = 'none';
                                document.getElementById('batalButton').style.display = 'none';
                                document.getElementById('gantiFotoButton').style.display = 'none';
                                document.getElementById('editProfileButton').style.display = 'block';
                            }

                            // Fungsi untuk menampilkan tombol "Simpan", "Batal", dan "Ganti Foto Profil" serta menyembunyikan "Edit Profile"
                            function showSimpanBatalGantiFotoButtons() {
                                document.getElementById('simpanButton').style.display = 'block';
                                document.getElementById('batalButton').style.display = 'block';
                                document.getElementById('gantiFotoButton').style.display = 'block';
                                document.getElementById('editProfileButton').style.display = 'none';
                            }

                            // Mengatur event listener untuk tombol "Edit Profile"
                            var editProfileButton = document.getElementById('editProfileButton');
                            if (editProfileButton) {
                                editProfileButton.addEventListener('click', function () {
                                    showSimpanBatalGantiFotoButtons();
                                    sessionStorage.setItem('simpanBatalVisible', 'true');
                                });
                            }

                            // Mengatur event listener untuk tombol "Batal"
                            var batalButton = document.getElementById('batalButton');
                            if (batalButton) {
                                batalButton.addEventListener('click', function () {
                                    showEditProfileButton();
                                    sessionStorage.removeItem('simpanBatalVisible');
                                });
                            }

                            // Memeriksa status tombol "Edit Profile" dari sessionStorage saat halaman dimuat
                            var simpanBatalVisible = sessionStorage.getItem('simpanBatalVisible');
                            if (simpanBatalVisible === 'true') {
                                showSimpanBatalGantiFotoButtons();
                            } else {
                                showEditProfileButton();
                            }

                            // Mengatur event listener saat halaman dimuat ulang
                            window.addEventListener('beforeunload', function () {
                                sessionStorage.removeItem('simpanBatalVisible');
                            });
                            </script>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="" style="">
                    <h1 style="font-weight: 900; font-size: 48px; margin-right: 30px; width: fit-content; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 9.92%, #000AFF 107.06%));
                    background-clip: text;
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;">Produk UMKM</h1>
                    <button class="btn" style="border-radius: 12px; margin-bottom: 20px;
                    background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));" data-bs-toggle="modal" data-bs-target="#staticBackdropCreateProduct">Tambah Produk Baru</button>
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
                                background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">HARGA</th>
                                <th style="font-size: 30px; font-weight: 900; background: var(--gradddd, linear-gradient(147deg, #4DBFFF 19.92%, #000AFF 107.06%));
                                background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                            // Ambil data UMKM dari database
                            $produks = DB::table('produks')->get();
                            @endphp

                            @foreach ($produks as $produk)
                                @if ($produk->id_umkm == request()->query('id'))
                                    <tr>
                                        <td><img src="{{ asset('img/dashboard-product-img.png') }}" alt=""></td>
                                        <td>{{ $produk->id_produk }}</td>
                                        <td>{{ $produk->nama_produk }}</td>
                                        <td>{{ $produk->kategori_produk }}</td>
                                        <td>{{ $produk->harga_produk }}</td>
                                        <td>
                                            <button class="btn" style="background-color: deepskyblue" data-bs-toggle="modal" data-bs-target="#staticBackdropEditProduct">Edit</button>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Create Product-->
    <div class="modal fade" id="staticBackdropCreateProduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropCreateProductLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropCreateProductLabel">Edit Product</h1>
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
                                        <input type="text" placeholder="Tulis Nama Produk Anda" class="form-control" id="InputNamaProduk" aria-describedby="NamaProductHelp">
                                    </div>
                                    <div>
                                        <label for="InputJenisProduk" class="form-label">Jenis Produk</label>
                                        <input type="text" placeholder="Tulis Jenis Produk Anda" class="form-control" id="InputNamaProduk" aria-describedby="NamaProductHelp">
                                    </div>
                                    <div>
                                        <label for="InputHargaProduk" class="form-label">Harga Produk</label>
                                        <input type="text" placeholder="Tulis Harga Produk Anda" class="form-control" id="InputHargaProduk" aria-describedby="emailHelp">
                                    </div>
                                    <div>
                                        <label for="InputPemesananProduk" class="form-label">Nomor Pemesanan</label>
                                        <input type="text" placeholder="Tulis Nomor Pemesananan Produk Anda" class="form-control" id="InputPemesananProduk" aria-describedby="emailHelp">
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
    <!-- Modal Edit Product-->
    <div class="modal fade" id="staticBackdropEditProduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropEditProductLabel">Edit Product</h1>
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





<script>
    // Menangkap elemen-elemen yang akan diubah status disabled-nya
    var inputNamaUsaha = document.getElementById('InputNamaUsaha');
    var inputKatagori = document.getElementById('InputKatagori');
    var inputDeskripsiUsaha = document.getElementById('InputDeskripsiUsaha');
    var inputPemilikUsaha = document.getElementById('InputPemilikUsaha');
    var inputWAUsaha = document.getElementById('InputWAUsaha');
    var inputIzinUsaha = document.getElementById('InputIzinUsaha');
    var inputAlamatUsaha = document.getElementById('InputAlamatUsaha');

    // Tombol "Edit Profile"
    var editProfileButton = document.getElementById('editProfileButton');

    // Tombol "Simpan" dan "Batal"
    var simpanButton = document.getElementById('simpanButton');
    var batalButton = document.querySelector('#saveCancelButtons button:last-child');

    // Mengecek apakah status "Edit Profile" sudah diset
    var isEditing = localStorage.getItem('isProfileEditing');

    // Fungsi untuk mengaktifkan input
    function enableInputs() {
        inputNamaUsaha.removeAttribute('disabled');
        inputKatagori.removeAttribute('disabled');
        inputDeskripsiUsaha.removeAttribute('disabled');
        inputPemilikUsaha.removeAttribute('disabled');
        inputWAUsaha.removeAttribute('disabled');
        inputIzinUsaha.removeAttribute('disabled');
        inputAlamatUsaha.removeAttribute('disabled');
        simpanButton.style.display = 'block';
        batalButton.style.display = 'block';
    }

    // Fungsi untuk menonaktifkan input
    function disableInputs() {
        inputNamaUsaha.setAttribute('disabled', 'disabled');
        inputKatagori.setAttribute('disabled', 'disabled');
        inputDeskripsiUsaha.setAttribute('disabled', 'disabled');
        inputPemilikUsaha.setAttribute('disabled', 'disabled');
        inputWAUsaha.setAttribute('disabled', 'disabled');
        inputIzinUsaha.setAttribute('disabled', 'disabled');
        inputAlamatUsaha.setAttribute('disabled', 'disabled');
        simpanButton.style.display = 'none';
        batalButton.style.display = 'none';
    }

    // Mengatur event listener untuk tombol "Edit Profile"
    editProfileButton.addEventListener('click', function () {
        enableInputs();

        // Menyimpan status "Edit Profile" ke local storage
        localStorage.setItem('isProfileEditing', 'true');
    });

    // Memeriksa apakah status "Edit Profile" sudah diaktifkan saat halaman dimuat
    if (isEditing === 'true') {
        enableInputs();
    } else {
        // Jika belum diaktifkan, maka input-input akan dalam keadaan disabled
        disableInputs();
    }

    // Mengatur event listener saat halaman dimuat ulang
    window.addEventListener('beforeunload', function () {
        localStorage.removeItem('isProfileEditing');
    });
    </script>

</body>
</html>
