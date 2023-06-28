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
        Schema::create('desc_permintaan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_permintaan');
            $table->integer('id_inventaris');
            $table->text('diagnosa');
            $table->text('tindakan');
            $table->text('deskripsi');
            $table->integer('id_status_deskripsi');
            $table->integer('id_status_qc');
            $table->integer('id_status_penyelesaian');
            $table->integer('id_teknisi');
            $table->integer('deleted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('desc_perminta');
    }
};
