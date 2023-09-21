<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id('id_prod');
            $table->string('nama_prod');
            $table->decimal('harga_prod', 10, 2);
            $table->string('desc_prod')->nullable();
            $table->string('spesifikasi_prod')->nullable();
            $table->string('ulasan_prod')->nullable();
            $table->decimal('rating_prod', 3, 2)->nullable();
            $table->string('foto_prod')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produk');
    }
}

