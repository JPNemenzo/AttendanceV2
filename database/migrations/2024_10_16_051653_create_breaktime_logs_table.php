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
        Schema::create('breaktime_logs', function (Blueprint $table) {
            $table->id('Breaktime_id');
            $table->foreignId('Attendance_id');
            $table->timestamp('Start_time')->nullable();
            $table->timestamp('End_time')->nullable();
            $table->Time('Total_hours');
            $table->string('Field');
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('breaktime_logs');
    }
};
