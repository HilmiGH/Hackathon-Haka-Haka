<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    use HasFactory;

    protected $table = 'kategoriproduk';

    protected $primaryKey = 'id_kategori';

    protected $fillable = [
        'nama_kategori',
    ];

    // Definisikan relasi one-to-many dengan model Produk
    public function produk()
    {
        return $this->hasMany(Produk::class, 'id_kategori');
    }
}
