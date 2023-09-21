<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeranjangTable extends Migration
{
    public function up()
    {
        Schema::create('keranjang', function (Blueprint $table) {
            $table->id();
            $table->string('ip_pengguna'); // Kolom untuk menyimpan alamat IP pengguna
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            // Tambahan kolom lain sesuai kebutuhan Anda
        });
    }

    public function down()
    {
        Schema::dropIfExists('keranjang');
    }
}
