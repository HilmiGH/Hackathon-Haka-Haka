<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUmkmsTable extends Migration
{
    public function up()
    {
        Schema::create('umkms', function (Blueprint $table) {
            $table->id('id_umkm');
            $table->string('umkm_img', 255);
            $table->string('nama_usaha', 50);
            $table->string('kategori_usaha', 50);
            $table->string('tagline_usaha', 50);
            $table->text('alamat_usaha', 100);
            $table->date('tanggal_berdiri');
            $table->string('nama_pemilik', 50);
            $table->string('surat_izin_usaha', 50);
            $table->text('deskripsi_usaha', 200);
            $table->decimal('rating', 5, 2);
            $table->integer('jumlah_ulasan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('umkms');
    }
}
