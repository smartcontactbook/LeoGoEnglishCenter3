<?php

namespace App;
// use Illuminate\Notification\Notifiable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Zizaco\Entrust\Traits\EntrustUserTrait;

class lecturer extends Authenticatable
{
    // use EntrustUserTrait;
    use Notifiable;
    protected $table='lecturer';
    protected $guard='lecturer';
    public $timestamps = false;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password',
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
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function lecturer_account()
    {
    	return $this->hasOne('app\lecturer_account');
    }

    public function leogo_class()
    {
    	return $this->hasMany('app\leogo_class');
    }

    public function role()
    {
        return $this->belongsTo('app\role');
    }
}
