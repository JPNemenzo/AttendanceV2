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
        Schema::create('work_schedules', function (Blueprint $table) {
            $table->id('work_schedule_id');
            $table->foreignId('employee_id');
            $table->Time('Monday_in');
            $table->Time('Monday_out');
            $table->Time('Tuesday_in');
            $table->Time('Tuesday_out');
            $table->Time('Wednesday_in');
            $table->Time('Wednesday_out');
            $table->Time('Thursday_in');
            $table->Time('Thursday_out');
            $table->Time('Friday_in');
            $table->Time('Friday_out');
            $table->Time('Saturday_in')->nullable();
            $table->Time('Saturday_out')->nullable();
            $table->Time('Sunday_in')->nullable();
            $table->Time('Sunday_out')->nullable();
            $table->foreignId('Updated By');
            $table->timestamp('Update_on')->nullable();

           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_schedules');
    }
};
