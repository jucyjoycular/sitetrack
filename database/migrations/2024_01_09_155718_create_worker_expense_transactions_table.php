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
        Schema::create('worker_expense_transactions', function (Blueprint $table) {
            $table->id();
            $table->dateTime('post_date');
            $table->dateTime('tax_date');
            $table->string('ref_1');
            $table->longText('description');
            $table->string('project');
            $table->longText('description_2');
            $table->integer('local_dr');
            $table->integer('local_cr');
            $table->integer('local_balance');
            $table->integer('tax');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('worker_expense_transactions');
    }
};
