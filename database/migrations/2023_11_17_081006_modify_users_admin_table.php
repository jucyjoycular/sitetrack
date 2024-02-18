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
//        //
//        // Remove the email column
//        Schema::table('users', function (Blueprint $table) {
//            $table->dropColumn('email');
//        });
//
//        // Add the username column
//        Schema::table('users', function (Blueprint $table) {
//            $table->string('username')->unique()->after('name');
//        });
//
//        // Remove the email_verified_at column
//        Schema::table('users', function (Blueprint $table) {
//            $table->dropColumn('email_verified_at');
//        });
//
        Schema::table('admins', function (Blueprint $table) {
            $table->dropColumn('email');
        });

        Schema::table('admins', function (Blueprint $table) {
            $table->string('username')->unique()->after('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
