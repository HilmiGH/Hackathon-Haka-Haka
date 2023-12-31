<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id_produk'; // Menentukan primary key
    protected $fillable = [
        'id_produk',
        'nama_produk',
        'kategori_produk',
        'harga_produk',
        'nomor_pemesanan',
        'produk_img',
    ];

    public function umkm()
    {
        return $this->belongsTo(Umkm::class, 'id_umkm');
    }
}
