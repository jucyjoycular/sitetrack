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
        Schema::create('mechanic_transactions', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->string('site_code');
            $table->string('name');
            $table->longText('activity');
            $table->longText('work_detail');
            $table->string('contractor');
            $table->string('supplier');
            $table->string('mesin_id');
            $table->string('diesel_in');
            $table->string('receipt_no');
            $table->integer('diesel_out');
            $table->string('transfer_type');
            $table->string('block');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mechanic_transactions');
    }
};
