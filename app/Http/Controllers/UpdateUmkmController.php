<?php

// UmkmController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Umkm; // Import model Umkm
use App\Models\Produk; // Import model Produk

class UpdateUmkmController extends Controller
{
    public function edit($id)
    {
        $umkm = DB::table('umkms')->where('id_umkm', $id)->first();
        $produk = DB::table('produks')->where('id_umkm', $id)->first();

        if (!$umkm) {
            abort(404); // Handle jika data UMKM tidak ditemukan
        }

        return view('admin.umkm-info-dashboard', compact('umkm', 'produk', 'id'));
    }

    public function update(Request $request, $id)
    {
        // Validate the form data (add validation rules as needed)
        $request->validate([
            'nama_usaha' => 'required|string|max:255',
            'kategori_usaha' => 'required|string|max:255',
            'deskripsi_usaha' => 'required|string',
            'nama_pemilik' => 'required|string|max:255',
            'nomor_pemesanan' => 'required|string|max:255',
            'surat_izin_usaha' => 'required|string|max:255',
            'alamat_usaha' => 'required|string|max:255',
        ]);

                // Mengunggah gambar jika ada
                if ($request->hasFile('umkm_img')) {
                    $file = $request->file('umkm_img');
                    $fileName = $file->getClientOriginalName();
                    $fileSave = $request->name . '-' . $fileName;
                    $path = 'img/UMKM Image/';

                    // Hapus gambar lama jika ada
                    if (File::exists($path . $umkm->umkm_img)) {
                        File::delete($path . $umkm->umkm_img);
                    }

                    // Simpan gambar baru
                    $file->move($path, $fileSave);
                    $umkm->umkm_img = $fileSave;
                }


        // Update the 'umkms' table
        DB::table('umkms')
            ->where('id_umkm', $id)
            ->update([
                'nama_usaha' => $request->input('nama_usaha'),
                'kategori_usaha' => $request->input('kategori_usaha'),
                'deskripsi_usaha' => $request->input('deskripsi_usaha'),
                'nama_pemilik' => $request->input('nama_pemilik'),
                'surat_izin_usaha' => $request->input('surat_izin_usaha'),
                'alamat_usaha' => $request->input('alamat_usaha'),
                'umkm_img' => $request->input('umkm_img'), // Validasi gambar
            ]);

        // Update the 'produks' table
        DB::table('produks')
            ->where('id_umkm', $id)
            ->update([
                'nomor_pemesanan' => $request->input('nomor_pemesanan'),
            ]);

        return redirect()->route('umkm-edit', ['id' => $id])->with('success', 'Data berhasil diperbarui');
    }
}
