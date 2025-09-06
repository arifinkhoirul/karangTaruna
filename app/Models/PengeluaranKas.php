<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PengeluaranKas extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pengeluaran_kas';

    protected $fillable = [
        'user_id',
        'bulan',
        'tahun',
        'jumlah',
        'keterangan',
        'tanggal_pengeluaran',
    ];


    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
