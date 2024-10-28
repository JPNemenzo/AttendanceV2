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
        Schema::create('off_duty_dates', function (Blueprint $table) {
            $table->id('Holiday_id');
            $table->string('Field');
            $table->String('Description');
            $table->Date('Date');
            $table->Double('Percentage');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('off_duty_dates');
    }
};
