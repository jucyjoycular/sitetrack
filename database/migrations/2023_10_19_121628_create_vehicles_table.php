<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('vehicle_id')->unique();
            $table->string('model');
            $table->string('type');
            $table->string('fuel_type');
            $table->integer('fuel_capacity');
            $table->string('gl_code')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
