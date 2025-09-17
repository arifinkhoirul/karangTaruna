<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CashBook extends Model
{
    use HasFactory;

    protected $table = 'cash_books';

    protected $fillable = [
        'user_id',
        'teenager_id',
        'bulan',
        'tahun',
        'jumlah',
        'tanggal_bayar',
        'status',
    ];



    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function teenager() {
        return $this->belongsTo(Teenager::class, 'teenager_id');
    }
}
