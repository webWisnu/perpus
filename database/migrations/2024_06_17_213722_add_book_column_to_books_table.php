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
        Schema::table('books', function (Blueprint $table) {
            Schema::table('books', function (Blueprint $table) {
                $table->string('kode_book', 255)->nullable()->after('title');
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            if (Schema::hasColumn('books', 'kode_book')) {
                $table->dropColumn('kode_book');
            }
        });
    }
};