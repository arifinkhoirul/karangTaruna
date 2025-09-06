<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MainImage extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'main_images';

    protected $fillable = [
        'user_id',
        'image',
        'status',
    ];


    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
