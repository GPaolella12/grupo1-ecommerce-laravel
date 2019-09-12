<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticable;

class User extends Authenticable
{
    use Notifiable;

    public $timestamps = false;
    protected $fillable = ['name', 'last_name', 'dni', 'email', 'phone', 'password',];
    protected $hidden = ['password', 'remember_token',];
    protected $casts = ['email_verified_at' => 'datetime',];

    public function completeName(){
        return $this->name . " " . $this->last_name;
    }

    public function cart(){
        return $this->hasOne(Cart::class, 'user_id');
    }
}
