<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('supplier_code');
            $table->string('supplier_name');
            $table->integer('phone_number');
            $table->string('address');
            $table->string('gl_code');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
