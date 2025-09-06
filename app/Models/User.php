<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }



    public function blogs() {
        return $this->hasMany(Blog::class);
    }


    public function cashBooks() {
        return $this->hasMany(CashBook::class);
    }


    public function teenagers() {
        return $this->hasMany(Teenager::class);
    }


    public function events() {
        return $this->hasMany(Event::class);
    }

    public function members() {
        return $this->hasMany(Member::class);
    }

    public function documentations() {
        return $this->hasMany(Documentation::class);
    }

    public function mainImages() {
        return $this->hasMany(MainImage::class);
    }

    public function pengeluaranKas() {
        return $this->hasMany(PengeluaranKas::class);
    }
}
