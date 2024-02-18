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
        Schema::create('work_done_claims', function (Blueprint $table) {
            $table->id();
            $table->longText('no');
            $table->string('item_description');
            $table->string('ref');
            $table->integer('uom');
            $table->integer('claim_quantity');
            $table->integer('contract_qty');
            $table->integer('claim_to_date_qty');
            $table->integer('payment_receive_qty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_done_claims');
    }
};
