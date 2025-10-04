<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sarana_prasarana', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('potensis_id'); // foreign key ke potensis
            
            $table->string('kategori'); // Sarana / Prasarana
            $table->string('jenis');    // contoh: Komputer, Mesjid
            $table->integer('jumlah')->nullable();
            $table->timestamps();

            // relasi ke tabel potensis
            $table->foreign('potensis_id')->references('id')->on('potensis')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sarana_prasarana');
    }
};
