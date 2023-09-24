<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalWorkshop extends Model
{
    protected $table = 'jadwal_workshops';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'jadwal_workshop',
        'lokasi',
        'jadwal_tanggal',
        'jadwal_pukul',
        'link_rd',
        'link_maps',
        'sisa_kuota',
    ];

    public function workshop()
    {
        return $this->belongsTo(Workshop::class, 'jadwal_workshop');
    }
}
