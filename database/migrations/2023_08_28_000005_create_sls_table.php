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
        Schema::create('sls', function (Blueprint $table) {
            $table->id('sls_id');
            $table->string('sls_kode', 4)->unique(); // Tambahkan panjang maksimum dan indeks unik
            $table->string('sls_nama', 100);
            $table->string('kel_id');
            $table->unsignedBigInteger('rw_id');
            $table->unsignedBigInteger('rt_id');

            $table->unique(['rw_id', 'rt_id', 'kel_id']);

            $table->foreign('kel_id')->references('kel_id')->on('kelurahan')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('rw_id')->references('rw_id')->on('rukun_warga')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('rt_id')->references('rt_id')->on('rukun_tetangga')->cascadeOnDelete()->cascadeOnUpdate();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sls');
    }
};
