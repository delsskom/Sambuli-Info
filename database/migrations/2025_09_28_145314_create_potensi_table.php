<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('potensi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_potensi');
            $table->unsignedBigInteger('rt_id');
            $table->timestamps();

            // relasi ke tabel rt
            $table->foreign('rt_id')->references('id')->on('rt')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('potensi');
    }
};
