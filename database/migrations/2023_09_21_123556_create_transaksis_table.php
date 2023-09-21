<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->unsignedBigInteger('id_detail_keranjang');
            $table->foreign('id_detail_keranjang')->references('id_detail_keranjang')->on('detail_keranjang')->onDelete('cascade');
            $table->double('total_harga', 20, 2);
            $table->string('status_transaksi', 20);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}

