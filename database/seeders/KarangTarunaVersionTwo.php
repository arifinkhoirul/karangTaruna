<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KarangTarunaVersionTwo extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('documentations')->insert([
            [
                'user_id' => 1,
                'image' => 'default.jpg',
                'link' => 'http://irul.com/gdrive/foto',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'image' => 'default.jpg',
                'link' => 'http://irul.com/gdrive/foto',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'image' => 'default.jpg',
                'link' => 'http://irul.com/gdrive/foto',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);


        DB::table('main_images')->insert([
            [
                'user_id' => 1,
                'image' => 'default.jpg',
                'status' => 'aktif',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'image' => 'default.jpg',
                'status' => 'aktif',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'image' => 'default.jpg',
                'status' => 'aktif',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);


        DB::table('pengeluaran_kas')->insert([
            [
                'user_id' => 1,
                'bulan' => 'jan',
                'tahun' => 2025,
                'jumlah' => '10000.00',
                'keterangan' => 'dekorasi 17 agustus',
                'tanggal_pengeluaran' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'bulan' => 'jan',
                'tahun' => 2025,
                'jumlah' => '10000.00',
                'keterangan' => 'dekorasi 17 agustus',
                'tanggal_pengeluaran' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'bulan' => 'jan',
                'tahun' => 2025,
                'jumlah' => '10000.00',
                'keterangan' => 'dekorasi 17 agustus',
                'tanggal_pengeluaran' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
