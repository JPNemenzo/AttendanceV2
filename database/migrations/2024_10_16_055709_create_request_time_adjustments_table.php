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
        Schema::create('request_time_adjustments', function (Blueprint $table) {
            $table->id('Time_adjusment_id');
            $table->foreignId('Attendance_id');
            $table->foreignId('Request_type_id');
            $table->timestamp('Start_time')->nullable();
            $table->timestamp('End_time')->nullable();


            $table->time('Total_hours');
            $table->string('Reason');
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_time_adjustments');
    }
};
