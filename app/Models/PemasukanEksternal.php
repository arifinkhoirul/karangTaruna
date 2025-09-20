<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PemasukanEksternal extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pemasukan_eksternal';

    protected $fillable = [
        'user_id',
        'bulan',
        'tahun',
        'jumlah',
        'keterangan',
        'tanggal_pemasukan',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
