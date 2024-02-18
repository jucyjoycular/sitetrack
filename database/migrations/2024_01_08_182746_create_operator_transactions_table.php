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
        Schema::create('operator_transactions', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->dateTime('month');
            $table->string('site_code');
            $table->string('name');
            $table->longText('activity');
            $table->integer('quantity');
            $table->string('uom');
            $table->string('block');
            $table->string('task');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->string('mesin_id');
            $table->integer('fuel');
            $table->string('wages_activity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operator_transactions');
    }
};
