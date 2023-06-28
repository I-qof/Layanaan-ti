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
        Schema::create('desc_aduan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_aduan');
            $table->integer('id_sperpat');
            $table->text('kerusakan');
            $table->text('diagnosa');
            $table->text('tindakan');
            $table->text('deskripsi');
            $table->integer('id_status');
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
        Schema::dropIfExists('desc_aduan');
    }
};
