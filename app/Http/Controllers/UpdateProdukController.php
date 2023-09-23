<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\Produk;
use App\Models\Umkm;
use App\Http\Controllers\Controller;

class UpdateProdukController extends Controller
{
    public function edit($id)
    {
        // Cari data produk berdasarkan ID produk
        $produk = Produk::find($id);

        if (!$produk) {
            abort(404); // Handle jika data produk tidak ditemukan
        }

        return view('admin.umkm-info-dashboard', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        // Validate the form data (add validation rules as needed)
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'kategori_produk' => 'required|string|max:255',
            'nomor_pemesanan' => 'required|string|max:255',
            'produk_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        // Cari data produk berdasarkan ID produk
        $produk = Produk::find($id);

        if (!$produk) {
            abort(404); // Handle jika data produk tidak ditemukan
        }

        // Mengunggah gambar jika ada
        if ($request->hasFile('produk_image')) {
            $file = $request->file('produk_image');
            $fileName = $file->getClientOriginalName();
            $fileSave = $request->nama_produk . '-' . $fileName;
            $path = 'img/Produk Image/';

            // Hapus gambar lama jika ada
            if (File::exists($path . $produk->produk_image)) {
                File::delete($path . $produk->produk_image);
            }

            // Simpan gambar baru
            $file->move($path, $fileSave);
            $produk->produk_image = $fileSave;
        }

        // Update data produk
        $produk->nama_produk = $request->input('nama_produk');
        $produk->kategori_produk = $request->input('kategori_produk');
        $produk->nomor_pemesanan = $request->input('nomor_pemesanan');
        $produk->save();

        return redirect()->route('produk-edit', ['id' => $id])->with('success', 'Data produk berhasil diperbarui');
    }
}
