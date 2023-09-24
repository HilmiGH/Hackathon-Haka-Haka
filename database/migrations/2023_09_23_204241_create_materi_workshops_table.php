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
        Schema::create('materi_workshops', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('materi_workshop');
            $table->string('judul_modul', 50);
            $table->string('deskripsi_modul', 255);
            $table->timestamps();

            $table->foreign('materi_workshop')->references('id')->on('workshops');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materi_workshops');
    }
};
