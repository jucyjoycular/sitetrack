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
        Schema::create('site_management', function (Blueprint $table) {
            $table->id();
            $table->integer('site_primary_id');
            $table->longText('project_name');
            $table->string('project_value');
            $table->string('project_code');
            $table->longText('project_information');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_management');
    }
};
