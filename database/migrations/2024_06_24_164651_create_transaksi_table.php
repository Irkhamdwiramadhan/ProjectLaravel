<?php

use App\Models\area_palkir;
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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal');
            $table->string('mulai');
            $table->string('akhir');
            $table->string('keterangan');
            $table->string('biaya');

            $table->unsignedBigInteger('kendaraan_id');
            $table->foreign('kendaraan_id')->references('id')->on('kendaraan');

            $table->foreignIdFor(area_palkir::class);

            // $table->unsignedBigInteger('area_palkir_id');
            // $table->foreign('area_palkir_id')->references('id')->on('area_palkir');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
