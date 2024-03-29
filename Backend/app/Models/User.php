<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Follower;
use App\Models\Hashtag;
use App\Models\Conspiracy;
use App\Models\Bet;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public function followers(){
        return $this->hasMany(Follower::class);
    }

   

    public function conspiracies(){
        return $this->hasMany(Conspiracy::class);
        
    }

    public function bets(){
        return $this->hasMany(Bet::class);
        
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'dob',
        'gender'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
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
