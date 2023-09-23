<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailKeranjang extends Model
{
    protected $table = 'detail_keranjang';
    protected $primaryKey = 'id_detail_keranjang'; // Menentukan primary key
    protected $fillable = ['id_keranjang', 'nama_produk', 'jumlah_produk', 'harga_produk'];

    public function keranjang()
    {
        return $this->belongsTo(Keranjang::class, 'id_keranjang');
    }
}
