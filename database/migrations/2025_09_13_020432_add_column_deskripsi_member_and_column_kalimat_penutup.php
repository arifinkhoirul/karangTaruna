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
        Schema::table('members', function(Blueprint $table) {
            $table->string('deskripsi_member')->after('teenager_id');
        });

        Schema::table('events', function(Blueprint $table) {
            $table->string('kalimat_penutup')->after('tanggal_mulai');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('members', function (Blueprint $table) {
            $table->dropColumn('deskripsi_member');
        });

        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('kalimat_penutup');
        });
    }
};
