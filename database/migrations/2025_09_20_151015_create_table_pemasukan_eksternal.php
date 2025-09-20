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
        Schema::create('pemasukan_eksternal', function(Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->enum('bulan', ['jan', 'feb', 'mar', 'apr', 'mei', 'jun', 'jul', 'agu', 'sep', 'okt', 'nov', 'des']);
            $table->year('tahun');
            $table->decimal('jumlah', 15, 2);
            $table->string('keterangan');
            $table->date('tanggal_pemasukan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemasukan_eksternal');
    }
};
