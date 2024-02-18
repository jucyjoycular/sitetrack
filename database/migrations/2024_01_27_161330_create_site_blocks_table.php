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
        Schema::create('site_blocks', function (Blueprint $table) {
            $table->id();
            $table->integer('site_id');
            $table->string('trello_id');
            $table->string('trello_title');
            $table->string('trello_task');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_blocks');
    }
};
