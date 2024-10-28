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
        Schema::create('handbooks', function (Blueprint $table) {
            $table->id('Handbook_id');
            $table->String('Description');
            $table->string('Link');
            $table->timestamp('Date');

       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('handbooks');
    }
};
