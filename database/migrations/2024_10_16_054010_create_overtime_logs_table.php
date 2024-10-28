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
        Schema::create('overtime_logs', function (Blueprint $table) {
            $table->id('Overtime_id');
            $table->foreignId('Attendance_id');
            $table->timestamp('Start_time')->nullable();
            $table->timestamp('End_time')->nullable();

            $table->Time('Total_hours');
            $table->String('Field');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('overtime_logs');
    }
};
