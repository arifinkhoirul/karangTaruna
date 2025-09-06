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
        Schema::create('documentations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('image');
            $table->text('link');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('main_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('image');
            $table->enum('status', ['aktif', 'nonaktif']);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('pengeluaran_kas', function(Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->enum('bulan', ['jan', 'feb', 'mar', 'apr', 'mei', 'jun', 'jul', 'agu', 'sep', 'okt', 'nov', 'des']);
            $table->year('tahun');
            $table->decimal('jumlah', 15, 2);
            $table->string('keterangan');
            $table->date('tanggal_pengeluaran');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentations');
        Schema::dropIfExists('main_images');
        Schema::dropIfExists('pengeluaran_kas');
    }
};
