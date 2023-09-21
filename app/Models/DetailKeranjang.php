<?php

// app/Models/DetailKeranjang.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKeranjang extends Model
{
    use HasFactory;

    protected $table = 'detail_keranjang'; // Sesuaikan dengan nama tabel yang digunakan

    protected $fillable = ['id_keranjang', 'nama_produk', 'jumlah_produk', 'harga_produk'];

    public function keranjang()
    {
        return $this->belongsTo(Keranjang::class, 'id_keranjang', 'id');
    }


    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'id_detail_keranjang', 'id_detail_keranjang');
    }
}
