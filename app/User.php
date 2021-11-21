<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Movie;
use App\rental;
use App\shopping;
use App\credit_cards;
use App\like;

class User extends Authenticatable
{
    use Notifiable;

    public function movies(){
        return $this->hasMany(Movie::class);
    }
    public function rentals(){
        return $this->hasMany(rental::class);
    }
    public function shoppings(){
        return $this->hasMany(shopping::class);
    }
    public function cards(){
        return $this->hasMany(credit_cards::class);
    }
    public function likes(){
        return $this->hasMany(like::class);
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','is_admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
