<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Documentation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'documentations';

    protected $fillable = [
        'user_id',
        'image',
        'link',
    ];


    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
