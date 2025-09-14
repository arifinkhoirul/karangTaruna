<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;

    protected $table = 'sponsors';

    protected $fillable = [
        'user_id',
        'nama_perusahaan',
        'image',
        'status',
    ];

    public function member() {
        return $this->belongsTo(Member::class, 'member_id');
    }
}
