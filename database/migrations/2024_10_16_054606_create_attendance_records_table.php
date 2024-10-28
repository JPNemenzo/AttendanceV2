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
        Schema::create('attendance_records', function (Blueprint $table) {
            $table->id('Attendance_id');
            $table->foreignId('Employee_id');
            $table->foreignId('Cutoff_id');
            $table->Double('Total_hours');
            $table->Double('Total_break');
            $table->Double('Total_ot');
            $table->Double('Rate');
            $table->Date('Date');
            $table->Time('Duty_start');
            $table->timestamp('Time_in')->nullable();
            $table->timestamp('Time_out')->nullable();
            $table->String('Status');
            $table->Boolean('Has_night_diff');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance_records');
    }
};
