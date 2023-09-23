<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';

    protected $primaryKey = 'id_artikel';

    protected $fillable = [
        'nama_artikel',
        'meta_artikel',
        'desc_artikel',
        'post_date_artikel',
        'foto_artikel',
    ];
}
