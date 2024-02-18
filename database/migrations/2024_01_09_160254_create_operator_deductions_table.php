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
        Schema::create('operator_deductions', function (Blueprint $table) {
            $table->id();
            $table->dateTime('month');
            $table->string('name');
            $table->string('activity');
            $table->integer('quantity_total');
            $table->string('wages_total_activity');
            $table->string('gross_total');
            $table->string('deduction_detail');
            $table->string('deduction_total');
            $table->string('net_wages');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operator_deductions');
    }
};
