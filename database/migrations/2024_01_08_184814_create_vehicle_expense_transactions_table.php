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
        Schema::create('vehicle_expense_transactions', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date')->nullable();
            $table->string('code')->nullable();
            $table->string('machinery')->nullable();
            $table->string('ref_1')->nullable();
            $table->string('ref_2')->nullable();
            $table->longText('description')->nullable();
            $table->integer('debt')->nullable();
            $table->integer('credit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_expense_transactions');
    }
};
