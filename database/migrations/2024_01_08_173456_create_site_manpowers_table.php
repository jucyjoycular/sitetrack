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
        Schema::create('site_manpowers', function (Blueprint $table) {
            $table->id();
            $table->integer('site_id');
            $table->string('manager')->nullable();
            $table->string('supervisor')->nullable();
            $table->string('operator')->nullable();
            $table->string('mechanic')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_manpowers');
    }
};
