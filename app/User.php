<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\PasswordResetNotification;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','D_email', 'password',
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
    
    public function earthquakes()
    {
        return $this->hasMany('App\earthquakes');
    }
    public function Contributions()
    {
        return $this->hasMany('App\Contribution','title','content','id');
    }
    public function foods()
    {
        return $this->hasMany('App\Foods');
    }
<<<<<<< Updated upstream
=======
    public function answer()
    {
        return $this->hasMany('App\answer');
    }
>>>>>>> Stashed changes
}
