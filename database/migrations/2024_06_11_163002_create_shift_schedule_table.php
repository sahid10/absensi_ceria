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
        Schema::create('shift_schedule', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shift_pattern_id');
            $table->integer('day_number');
            $table->unsignedBigInteger('shift_id');
            $table->timestamps();


            $table->foreign('shift_pattern_id')->references('id')->on('shift_pattern');
            $table->foreign('shift_id')->references('id')->on('shift');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shift_schedule');
    }
};
