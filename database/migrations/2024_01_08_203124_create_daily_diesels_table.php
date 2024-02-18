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
        Schema::create('daily_diesels', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->string('name');
            $table->string('mesin_id');
            $table->integer('mesin_meter');
            $table->integer('diesel_in');
            $table->integer('diesel_out');
            $table->integer('diesel_balance');
            $table->longText('remarks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daily_diesels');
    }
};
