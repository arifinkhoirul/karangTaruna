<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KarangTarunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->insert([
            [
                'user_id' => 1,
                'judul' => 'malam puncak kemerdakaan 17 agustus',
                'image' => 'default.jpg',
                'narasi_blog' => 'lorem ipsum dolor sit amet kolor tisum yudi riusni pala karisna turu',
                'tanggal_post' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'judul' => 'family gathering 20 september',
                'image' => 'default.jpg',
                'narasi_blog' => 'lorem ipsum dolor sit amet kolor tisum yudi riusni pala karisna turu',
                'tanggal_post' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'judul' => 'nonton bareng perjuangan G30S PKI',
                'image' => 'default.jpg',
                'narasi_blog' => 'lorem ipsum dolor sit amet kolor tisum yudi riusni pala karisna turu',
                'tanggal_post' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);


        DB::table('events')->insert([
            [
                'user_id' => 1,
                'nama_event' => 'pameran kreativitas anak muda',
                'image' => 'default.jpg',
                'deskripsi' => 'lorem ipsum dolor sit amet kolor tisum yudi riusni pala karisna turu',
                'tanggal_mulai' => Carbon::now(),
                'tanggal_selesai' => Carbon::now(),
                'lokasi' => 'lapangan rt 05',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'nama_event' => 'peresmian lomba 17 agustus',
                'image' => 'default.jpg',
                'deskripsi' => 'lorem ipsum dolor sit amet kolor tisum yudi riusni pala karisna turu',
                'tanggal_mulai' => Carbon::now(),
                'tanggal_selesai' => Carbon::now(),
                'lokasi' => 'lapangan rt 05',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'nama_event' => 'megelola limbah sampah menjadi brang berguna',
                'image' => 'default.jpg',
                'deskripsi' => 'lorem ipsum dolor sit amet kolor tisum yudi riusni pala karisna turu',
                'tanggal_mulai' => Carbon::now(),
                'tanggal_selesai' => Carbon::now(),
                'lokasi' => 'lapangan rt 05',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);


        DB::table('teenagers')->insert([
            [
                'user_id' => 1,
                'name' => 'tri',
                'tanggal_lahir' => Carbon::now(),
                'alamat' => 'ujung harapan',
                'minat_bakat' => 'futsal',
                'status' => 'aktif',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'name' => 'mario',
                'tanggal_lahir' => Carbon::now(),
                'alamat' => 'ujung harapan',
                'minat_bakat' => 'bulutangkis',
                'status' => 'aktif',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'name' => 'dhiya',
                'tanggal_lahir' => Carbon::now(),
                'alamat' => 'ujung harapan',
                'minat_bakat' => 'voli',
                'status' => 'aktif',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);


        DB::table('members')->insert([
            [
                'user_id' => 1,
                'teenager_id' => 1,
                'jabatan' => 'humas',
                'status' => 'aktif',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'teenager_id' => 2,
                'jabatan' => 'humas',
                'status' => 'aktif',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'teenager_id' => 3,
                'jabatan' => 'humas',
                'status' => 'aktif',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);


        DB::table('cash_books')->insert([
            [
                'user_id' => 1,
                'teenager_id' => 1,
                'bulan' => 'jan',
                'tahun' => 2025,
                'jumlah' => '10000.00',
                'tanggal_bayar' => Carbon::now(),
                'status' => 'sudah bayar',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'teenager_id' => 2,
                'bulan' => 'jan',
                'tahun' => 2025,
                'jumlah' => '10000.00',
                'tanggal_bayar' => Carbon::now(),
                'status' => 'sudah bayar',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'teenager_id' => 3,
                'bulan' => 'jan',
                'tahun' => 2025,
                'jumlah' => '10000.00',
                'tanggal_bayar' => Carbon::now(),
                'status' => 'sudah bayar',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
