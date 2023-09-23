<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produk;
use App\Models\Umkm;

class ProdukController extends Controller
{
    public function create(Request $request)
    {
        $id_umkm = $request->query('id'); // Ambil ID UMKM dari URL
        return view('produk.create', ['id_umkm' => $id_umkm]);
    }

    public function store(Request $request)
    {
        // Validasi data yang diinputkan
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'kategori_produk' => 'required|string|max:255',
            'harga_produk' => 'required|numeric',
            'nomor_pemesanan' => 'required|string|max:255',
        ]);

        // Simpan data produk ke dalam tabel 'produks' termasuk ID UMKM dari URL
        $produk = new Produk([
            'id_umkm' => $request->input('id_umkm'), // Menggunakan ID UMKM dari URL
            'nama_produk' => $request->input('nama_produk'),
            'kategori_produk' => $request->input('kategori_produk'),
            'harga_produk' => $request->input('harga_produk'),
            'nomor_pemesanan' => $request->input('nomor_pemesanan'),
        ]);

        // Simpan produk dan secara otomatis akan mengisi id_produk yang diinkrementasi
        $produk->save();

        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->route('produk-create', ['id' => $request->input('id_umkm')])->with('success', 'Produk berhasil disimpan');
    }
}
