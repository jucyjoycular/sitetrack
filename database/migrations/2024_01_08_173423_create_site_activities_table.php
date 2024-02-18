<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('site_activities', function (Blueprint $table) {
            $table->id();
            $table->integer('site_id');
            $table->integer('status')->nullable();
            $table->longText('work_activity')->nullable();
            $table->string('uom')->nullable();
            $table->string('estimate_quantity')->nullable();
            $table->string('worker_rate')->nullable();
            $table->string('contract_rate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_activities');
    }
};
