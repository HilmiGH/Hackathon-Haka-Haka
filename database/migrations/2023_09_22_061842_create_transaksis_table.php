<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_keranjang');
            $table->decimal('total_harga', 10, 2);
            $table->timestamp('created_at')->useCurrent();
            $table->string('status_transaksi');

            $table->foreign('id_keranjang')->references('id_keranjang')->on('keranjang');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}

