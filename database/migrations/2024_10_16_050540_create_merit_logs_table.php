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
        Schema::create('merit_logs', function (Blueprint $table) {
            $table->id('Merit_id');
            $table->foreignId('Employee_id');
            $table->foreignId('Employee_id_from');
            $table->foreignId('Merit_category_id');
            $table->string('Merit_type_id');
            $table->string('Reasons');
            $table->Double('Points');
            $table->Date('Date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merit_logs');
    }
};
