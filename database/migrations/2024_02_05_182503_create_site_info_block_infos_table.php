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
        Schema::create('site_info_block_infos', function (Blueprint $table) {
            $table->id();
            $table->integer('site_id');
            $table->integer('block_id');
            $table->integer('activity_block_id');
            $table->string('estimate_qty')->nullable();
            $table->string('worker_rate_rm')->nullable();
            $table->string('contract_rate_rm')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_info_block_infos');
    }
};
