<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kustomisasi extends Model
{
    use HasFactory;

    protected $table = 'kustomisasi';

    protected $primaryKey = 'id_kustomisasi';

    protected $fillable = [
        'produk_id',
        'warna_prod',
        'motif_prod',
        'font_prod',
        'kustom_tulisan',
    ];

    // Definisikan relasi many-to-one dengan model Produk
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }
}
