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
        Schema::create('permintaan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->text('alasan_permintaan');
            $table->string('no_aduan');
            $table->string('no_hp');
            $table->string('lokasi');
            $table->string('email_atasan');
            $table->dateTime('tgl_masuk');
            $table->dateTime('tgl_keluar');
            $table->integer('id_status');
            $table->string('nama_pengambil');
            $table->integer('id_status');
            $table->integer('deleted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permintaan');
    }
};
