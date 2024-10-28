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
        Schema::create('payslips', function (Blueprint $table) {
            $table->id('Payslip_id');
            $table->foreignId('Employee_id');
            $table->foreignId('Cutoff_id');
            $table->Double('Hours_rendered');
            $table->Double('OT_rendered');
            $table->Double('Total_deduction');
            $table->String('Total_pay');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payslips');
    }
};
