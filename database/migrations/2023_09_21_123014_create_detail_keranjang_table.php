<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailKeranjangTable extends Migration
{
    public function up()
    {
        Schema::create('detail_keranjang', function (Blueprint $table) {
            $table->id('id_detail_keranjang');
            $table->unsignedBigInteger('id_keranjang');
            $table->foreign('id_keranjang')->references('id')->on('keranjang')->onDelete('cascade');
            $table->string('nama_produk', 50);
            $table->unsignedInteger('jumlah_produk');
            $table->double('harga_produk', 20, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_keranjang');
    }
}
