<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $table = 'keranjang';
    protected $primaryKey = 'id_keranjang'; // Menentukan primary key
    protected $fillable = ['ip_pengguna'];

    public function detailKeranjang()
    {
        return $this->hasMany(DetailKeranjang::class, 'id_keranjang');
    }

    public function transaksi()
    {
        return $this->hasOne(Transaksi::class, 'id_keranjang');
    }
}

