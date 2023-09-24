<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    protected $table = 'workshops';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'nama_workshop',
        'kategori_workshop',
        'deskripsi_workshop',
        'materi_workshop',
        'jadwal_workshop',
        'Peserta',
        'fasilitator',
    ];

    public function materi()
    {
        return $this->hasMany(MateriWorkshop::class, 'materi_workshop');
    }

    public function jadwal()
    {
        return $this->hasMany(JadwalWorkshop::class, 'jadwal_workshop');
    }
}
