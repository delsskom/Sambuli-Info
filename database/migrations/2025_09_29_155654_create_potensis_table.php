<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('potensis', function (Blueprint $table) {
            $table->id();
            $table->string('rt')->nullable();
            $table->string('jumlah_kk')->nullable();
            $table->string('perkebunan')->nullable();
            $table->string('peternakan')->nullable();
            $table->string('perikanan')->nullable();
            $table->string('sumber_air')->nullable();
            $table->string('lainnya')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('potensis');
    }
};
