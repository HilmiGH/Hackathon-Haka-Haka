<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    protected $table = 'umkms';

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
    ];

    public function produk()
    {
        return $this->hasMany(Produk::class, 'umkm_id');
    }
}
