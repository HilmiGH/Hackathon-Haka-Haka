<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MateriWorkshop extends Model
{
    protected $table = 'materi_workshops';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'materi_workshop',
        'judul_modul',
        'deskripsi_modul',
    ];

    public function workshop()
    {
        return $this->belongsTo(Workshop::class, 'materi_workshop');
    }
}
