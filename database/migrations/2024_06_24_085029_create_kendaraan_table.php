<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->id();
            $table->string('merk');
            $table->string('pemilik');
            $table->string('nopol');
            $table->string('thn_beli');
            $table->string('deskripsi');

            $table->unsignedBigInteger('jenis_kendaraan_id');
            $table->foreign('jenis_kendaraan_id')->references('id')->on('jenis');

            $table->string('kapasitas_kursi');
            $table->string('rating');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraan');
    }
};
