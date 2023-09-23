<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    protected $table = 'umkms';
    protected $primaryKey = 'id_produk'; // Menentukan primary key
    protected $fillable = [
        'nama_usaha',
        'kategori_usaha',
        'tagline_usaha',
        'alamat_usaha',
        'tanggal_berdiri',
        'nama_pemilik',
        'surat_izin_usaha',
        'deskripsi_usaha',
        'rating',
        'jumlah_ulasan',
        'umkm_img',
    ];

    public function produk()
    {
        return $this->hasMany(Produk::class, 'id_umkm');
    }
}
