<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('workshops', function (Blueprint $table) {
            $table->id();
            $table->string('nama_workshop', 50);
            $table->string('kategori_workshop', 25);
            $table->string('deskripsi_workshop', 255);
            $table->unsignedBigInteger('materi_workshop');
            $table->unsignedBigInteger('jadwal_workshop');
            $table->string('Peserta', 255);
            $table->integer('Kuota');
            $table->string('fasilitator', 255);
            $table->timestamps();

            $table->foreign('materi_workshop')->references('id_materi')->on('materi_workshops');
            $table->foreign('jadwal_workshop')->references('id_batch')->on('jadwal_workshops');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workshops');
    }
};
