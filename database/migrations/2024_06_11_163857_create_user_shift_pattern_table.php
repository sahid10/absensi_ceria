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
        Schema::create('user_shift_pattern', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('shift_pattern_id');
            $table->date('start_date');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('shift_pattern_id')->references('id')->on('shift_pattern');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_shift_pattern');
    }
};
