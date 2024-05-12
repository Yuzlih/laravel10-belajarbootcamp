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
        Schema::create('antrian', function(Blueprint $table){
            $table->id();
            $table->string('nomor_antrian');
            $table->enum('status_antrian', ['Done','Not_Yet']);
            $table->unsignedBigInteger('dokter_id');
            $table->unsignedBigInteger('pasien_id');
            $table->foreign('dokter_id')->references('id')->on('dokter');
            $table->foreign('pasien_id')->references('id')->on('pasien');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
