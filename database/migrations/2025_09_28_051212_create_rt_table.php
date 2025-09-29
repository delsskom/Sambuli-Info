<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('rt', function (Blueprint $table) {
            $table->id();
            $table->string('nama_rt');
            $table->integer('jumlah_kk');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rt');
    }
};
