<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SocialMedias extends Model
{
    use HasFactory;

    protected $table = 'social_medias';

    protected $fillable = [
        'user_id',
        'member_id',
        'instagram',
        'tiktok',
        'twitter'
    ];

    public function member() {
        return $this->belongsTo(Member::class, 'member_id');
    }
}
