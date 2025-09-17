<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('cash_books', function (Blueprint $table) {
            $table->dropForeign(['teenager_id']);
            $table->foreign('teenager_id')->references('id')->on('teenagers')->onDelete('cascade');
        });

        Schema::table('members', function (Blueprint $table) {
            $table->dropForeign(['teenager_id']);
            $table->foreign('teenager_id')->references('id')->on('teenagers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cash_books', function (Blueprint $table) {
            $table->dropForeign(['teenager_id']); // hapus constraint dulu
            $table->dropColumn('teenager_id'); // baru hapus kolom
        });

        Schema::table('members', function (Blueprint $table) {
            $table->dropForeign(['teenager_id']);
            $table->dropColumn('teenager_id');
        });
    }
};
