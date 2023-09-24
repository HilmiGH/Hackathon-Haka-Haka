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
        Schema::create('jadwal_workshops', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jadwal_workshop');
            $table->string('lokasi', 25);
            $table->string('jadwal_tanggal', 25);
            $table->string('jadwal_pukul', 25);
            $table->string('link_rd', 25);
            $table->string('link_maps');
            $table->integer('sisa_kuota');
            $table->timestamps();

            $table->foreign('jadwal_workshop')->references('id')->on('workshops');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_workshops');
    }
};
