<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'members';

    protected $fillable = [
        'user_id',
        'teenager_id',
        'jabatan',
        'status',
    ];


    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function teenager() {
        return $this->belongsTo(Teenager::class, 'teenager_id');
    }
}
