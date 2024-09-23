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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');                        // Tanggal proyek
            $table->time('jam_berangkat');                  // Jam berangkat
            $table->string('jenis_kontrak_kerja');          // Jenis kontrak kerja
            $table->string('nama_project');                 // Nama proyek
            $table->string('nama_leader');                  // Nama leader
            $table->string('wilayah_ulp_terkait');          // Wilayah ULP terkait
            $table->string('nama_personil');                 // Nama pegawai
            $table->integer('total_jumlah_personil');        // Total jumlah pegawai
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
