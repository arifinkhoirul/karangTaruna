<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $table = 'portofolios';

    protected $fillable = [
        'user_id',
        'member_id',
        'judul',
        'tag',
        'deskripsi',
        'vidio',
        'image'
    ];

    public function member() {
        return $this->belongsTo(Member::class, 'member_id');
    }
}
