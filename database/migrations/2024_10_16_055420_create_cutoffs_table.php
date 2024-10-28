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
        Schema::create('cutoffs', function (Blueprint $table) {
            $table->id('Cutoff_id');
            $table->Date('Date_start');
            $table->Date('Date_end');
            $table->Double('Conversion_rate');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cutoffs');
    }
};
