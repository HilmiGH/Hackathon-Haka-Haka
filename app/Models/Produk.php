<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';

    protected $primaryKey = 'id_prod';

    protected $fillable = [
        'id_admin',
        'nama_prod',
        'harga_prod',
        'desc_prod',
        'spesifikasi_prod',
        'ulasan_prod',
        'rating_prod',
        'foto_prod',
    ];

    // Definisikan relasi one-to-many dengan model Kustomisasi
    public function kustomisasi()
    {
        return $this->hasMany(Kustomisasi::class, 'produk_id');
    }

    // Definisikan relasi many-to-one dengan model KategoriProduk
    public function kategori()
    {
        return $this->belongsTo(KategoriProduk::class, 'id_kategori');
    }
}
