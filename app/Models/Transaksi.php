<?php

// app/Models/Transaksi.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['id_detail_keranjang', 'total_harga', 'status_transaksi'];

    public function detailKeranjang()
    {
        return $this->hasMany(DetailKeranjang::class, 'id_detail_keranjang', 'id_detail_keranjang');
    }
}
