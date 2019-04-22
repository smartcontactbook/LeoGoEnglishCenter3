<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class staff extends Authenticatable
{
    // use EntrustUserTrait;
    use Notifiable, HasApiTokens;
    protected $table='staff';
    protected $guarded= [];
    public $timestamps = false;

    public function staff_account()
    {
    	return $this->hasOne('app\staff_account');
    }

    public function role()
    {
        return $this->belongsTo('app\role');
    }
//
}
