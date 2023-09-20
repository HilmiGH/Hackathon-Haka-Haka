@extends('layouts_web.app')

@section('content')
    <style>
        .btn.active {
            border-bottom: 2px solid rgb(255, 0, 0);
            border-top: none;
            border-left: none;
            border-right: none;
            /* Warna dan ketebalan garis bawah sesuaikan dengan preferensi Anda */
        }

        .btn-custom {
            background: linear-gradient(180deg, #D17323, #1a1818);
            /* Gradien linear dengan warna-warna yang sesuai */
            color: #fff;
            /* Warna teks putih */
        }

        #pilihanGambarKecil {
            display: flex;
            justify-content: center;
        }

        #pilihanGambarKecil img {
            width: 50px;
            /* Atur ukuran gambar kecil sesuai keinginan */
            margin: 5px;
            /* Atur margin sesuai keinginan */
            cursor: pointer;
            /* Menambahkan kursor tangan saat dihover */
        }

        #pilihanGambarKecil img:hover {
            border: 2px solid #007bff;
            /* Menambahkan border saat dihover */
        }
    </style>
    <script>
        function showContent(section) {
            // Menghapus class 'active' dari semua tombol
            document.querySelectorAll('.btn').forEach(function(btn) {
                btn.classList.remove('active');
            });

            // Menambahkan class 'active' pada tombol yang sedang dilihat    <img class="img-fluid text-end" src="{{ asset('img/produk.png') }}" alt="Gambar Produk">
            switch (section) {
                case 'deskripsi':
                    document.getElementById('deskripsiBtn').classList.add('active');
                    var contentDiv = document.getElementById('content');
                    contentDiv.innerHTML =
                        "<p><b>The Brown Trifold Leather Wallet First Edition</b> adalah perpaduan sempurna antara gaya dan fungsionalitas. Terbuat dari kulit asli berkualitas tinggi, dompet ini memancarkan keanggunan dan ketahanan. Desain lipat tiga-nya memberikan ruang yang cukup untuk mengatur barang-barang penting Anda, termasuk kartu, uang tunai, dan bahkan slot ID yang didedikasikan. Warna cokelat yang kaya menambahkan sentuhan kemewahan pada barang bawaan sehari-hari Anda, membuatnya cocok untuk acara formal maupun kegiatan santai. Dengan perhatian detail yang teliti dan kerajinan yang ekskuisit, Dompet Kulit Lipat Tiga Edisi Pertama adalah aksesori yang abadi yang melengkapi gaya pribadi Anda sambil menjaga barang berharga Anda tetap aman.</p>";
                    break;
                case 'spesifikasi':
                    document.getElementById('spesifikasiBtn').classList.add('active');
                    var contentDiv = document.getElementById('content');
                    contentDiv.innerHTML = "<h2>Spesifikasi</h2>";
                    break;
                case 'ulasan':
                    document.getElementById('ulasanBtn').classList.add('active');
                    var contentDiv = document.getElementById('content');
                    contentDiv.innerHTML = "<h2>Ulasan</h2>";
                    break;
            }
        }

        function ubahGambarUtama(namaGambar) {
    var gambarUtama = document.getElementById('gambarUtama');
    gambarUtama.src = namaGambar;
    gambarUtama.alt = 'Gambar Utama ' + namaGambar;
    console.log('Gambar Utama Berubah ke:', namaGambar);
}
    </script>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <img class="img-fluid" style="margin-left:-2%; margin-top:-2%"
                        src="{{ asset('img/aksesoris-kiri-atas.png') }}" alt="Gambar Kiri Atas">
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <img class="img-fluid" style="margin-right:-2%; margin-top:-2%"
                        src="{{ asset('img/aksesoris-kanan-atas.png') }}" alt="Gambar Kanan Atas">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 d-flex justify-content-center flex-column align-items-center">
                  <img id="gambarUtama" src="{{ asset('img/produk.png') }}" alt="Gambar Utama">
                  <div id="pilihanGambarKecil">
                    <img src="{{ asset('img/produk.png') }}" alt="Pilihan Gambar 2" onclick="ubahGambarUtama('img/produk.png')">
                    <img src="{{ asset('img/aksesoris-kiri-atas.png') }}" alt="Pilihan Gambar 1" onclick="ubahGambarUtama('img/aksesoris-kiri-atas.png')">
                    <img src="{{ asset('img/aksesoris-kanan-atas.png') }}" alt="Pilihan Gambar 2" onclick="ubahGambarUtama('img/aksesoris-kanan-atas.png')">
                    <img src="{{ asset('img/Kana-Logo.png') }}" alt="Pilihan Gambar 1" onclick="ubahGambarUtama('img/Kana-Logo.png')">
                    <!-- Tambahkan gambar-gambar lainnya sesuai kebutuhan -->
                  </div>
                </div>






                <div class="col-sm-6">
                    <h1><b>Brown Trifold Leather<br> Wallet First Edition </b></h1>
                    <h2>
                        <span style="text-decoration: line-through; color: gray;">Rp200.000</span>
                        <span style="color: red;">Rp100.000</span>
                    </h2>
                    <img class="img-fluid" src="{{ asset('img/rating.png') }}" alt="Rating Produk">
                    <div style="border-color: black;border-style: solid;border-width: 1px;border-radius: 5px;padding: 10px">
                        <div class="btn-group">
                            <button type="button" class="btn" id="deskripsiBtn"
                                onclick="showContent('deskripsi')"><b>DESKRIPSI</b></button>
                            <span>|</span>
                            <button type="button" class="btn" id="spesifikasiBtn"
                                onclick="showContent('spesifikasi')"><b>SPESIFIKAS</b></button>
                            <span>|</span>
                            <button type="button" class="btn" id="ulasanBtn"
                                onclick="showContent('ulasan')"><b>ULASAN</b></button>
                        </div>

                        <div id="content">
                            <!-- Tempat konten akan ditampilkan -->
                            <p><b>The Brown Trifold Leather Wallet First Edition</b> adalah perpaduan sempurna antara gaya
                                dan
                                fungsionalitas. Terbuat dari kulit asli berkualitas tinggi, dompet ini memancarkan
                                keanggunan
                                dan ketahanan. Desain lipat tiga-nya memberikan ruang yang cukup untuk mengatur
                                barang-barang
                                penting Anda, termasuk kartu, uang tunai, dan bahkan slot ID yang didedikasikan. Warna
                                cokelat
                                yang kaya menambahkan sentuhan kemewahan pada barang bawaan sehari-hari Anda, membuatnya
                                cocok
                                untuk acara formal maupun kegiatan santai.
                                Dengan perhatian detail yang teliti dan kerajinan yang ekskuisit, Dompet Kulit Lipat Tiga
                                Edisi
                                Pertama adalah aksesori yang abadi yang melengkapi gaya pribadi Anda sambil menjaga barang
                                berharga Anda tetap aman.</p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-6 ">
                            <a href="#" class="btn btn-custom w-100"><img src="{{ asset('img/Shop-Bag-Logo.png') }}"
                                    alt="" style="filter: brightness(0) invert(1);"> Masukkan Keranjang</a>
                        </div>
                        <div class="col-sm-6 = ">
                            <a href="#" class="btn btn-custom w-100">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section>
        <div class="position-relative">

        </div>
        <div>

        </div>
    </section>
    <section>

    </section>
    <section>

    </section>
    <section>

    </section>
    <section>

    </section>
    <section>

    </section>
    <section>

    </section>
    <section>

    </section>
@endsection
