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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('nama_event');
            $table->text('deskripsi');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->string('lokasi');
            $table->timestamps();
            $table->softDeletes();
        });


        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('judul');
            $table->longText('narasi_blog');
            $table->date('tanggal_post');
            $table->timestamps();
            $table->softDeletes();
        });


        Schema::create('teenagers', function(Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('name');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('minat_bakat');
            $table->enum('status', ['aktif', 'tidak aktif']);
            $table->timestamps();
            $table->softDeletes();
        });


        Schema::create('members', function(Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('teenager_id')->constrained('teenagers');
            $table->string('jabatan');
            $table->enum('status', ['aktif', 'tidak aktif']);
            $table->timestamps();
            $table->softDeletes();
        });


        Schema::create('cash_books', function(Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('teenager_id')->constrained('teenagers');
            $table->enum('bulan', ['jan', 'feb', 'mar', 'apr', 'mei', 'jun', 'jul', 'agu', 'sep', 'okt', 'nov', 'des']);
            $table->year('tahun');
            $table->decimal('jumlah', 15, 2);
            $table->date('tanggal_bayar');
            $table->enum('status', ['sudah bayar', 'belum bayar']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cash_books');
        Schema::dropIfExists('members');
        Schema::dropIfExists('teenagers');
        Schema::dropIfExists('blogs');
        Schema::dropIfExists('events');
    }
};
