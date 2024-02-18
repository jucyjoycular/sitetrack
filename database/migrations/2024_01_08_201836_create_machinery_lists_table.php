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
        Schema::create('machinery_lists', function (Blueprint $table) {
            $table->id();
            $table->integer('no');
            $table->string('machine_id');
            $table->string('model');
            $table->string('driver');
            $table->string('site');
            $table->string('report');
            $table->longText('remarks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('machinery_lists');
    }
};
