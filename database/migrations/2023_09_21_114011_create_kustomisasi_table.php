<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKustomisasiTable extends Migration
{
    public function up()
    {
        Schema::create('kustomisasi', function (Blueprint $table) {
            $table->id('id_kustomisasi');
            $table->unsignedBigInteger('produk_id');
            $table->string('warna_prod', 25);
            $table->string('motif_prod', 25);
            $table->string('font_prod', 25);
            $table->string('kustom_tulisan', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kustomisasi');
    }
}

