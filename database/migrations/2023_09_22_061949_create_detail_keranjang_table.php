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
            $table->string('nama_produk');
            $table->integer('jumlah_produk');
            $table->decimal('harga_produk', 10, 2);
            $table->timestamps();

            $table->foreign('id_keranjang')->references('id_keranjang')->on('keranjang');
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_keranjang');
    }
}
