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
        Schema::create('summary_diesels', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date_in');
            $table->integer('date_in_supplier');
            $table->integer('date_in_estate');
            $table->integer('date_in_transfer');
            $table->dateTime('date_out');
            $table->integer('date_out_lyk');
            $table->integer('date_out_transfer');
            $table->integer('date_out_contractor');
            $table->string('date_out_week');
            $table->string('date_out_balance_forward');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('summary_diesels');
    }
};
