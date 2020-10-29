<?php

namespace App;

use Illuminate\Notifications\Notifiable;



use Illuminate\Contracts\Auth\MustVerifyEmail;



use Illuminate\Foundation\Auth\User as Authenticatable;







class User extends Authenticatable


{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
        'Set_name', '@mail', 'Password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

        'Password', 'Remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [

        '@mail_verified_at' => 'Datetime',
    ];
}
