<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelanggansTable extends Migration
{
    public function up()
    {
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id('id_pelanggan');
            $table->string('nama_pelanggan', 50);
            $table->string('email_pelanggan', 50);
            $table->string('nomorhp_pelanggan', 50);
            $table->string('alamat_pelanggan', 100);
            $table->string('catatan_tambahan', 255)->nullable();
            $table->date('tanggal_gabung');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pelanggans');
    }
}

