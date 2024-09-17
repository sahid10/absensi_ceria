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
        Schema::create('attendant', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('shift_id'); // Foreign key ke tabel shifts
            $table->date('date'); // Tanggal kehadiran
            $table->time('check_in_time')->nullable(); // Waktu check-in
            $table->time('check_out_time')->nullable(); // Waktu check-out
            $table->string('status', 50)->nullable(); // Status kehadiran
            $table->text('notes')->nullable(); // Catatan tambahan
            $table->timestamps(); // Kolom created_at dan updated_at

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('shift_id')->references('id')->on('shift');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendant');
    }
};
