<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teenager extends Model
{
    use HasFactory, SoftDeletes;


    protected $table = 'teenagers';

    protected $fillable = [
        'user_id',
        'name',
        'image',
        'tanggal_lahir',
        'alamat',
        'minat_bakat',
        'status',
    ];


    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function cashBooks() {
        return $this->hasMany(CashBook::class);
    }

    public function members() {
        return $this->hasMany(Member::class);
    }
}
