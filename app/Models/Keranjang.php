<?php

// app/Models/Keranjang.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;

    protected $fillable = ['ip_pengguna']; // Izinkan untuk mengisi kolom alamat IP

    public function detailKeranjang()
    {
        return $this->hasMany(DetailKeranjang::class, 'id_keranjang', 'id');
    }
}
