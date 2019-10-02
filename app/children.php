<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class children extends Authenticatable
{
    // use EntrustUserTrait;
    use Notifiable, HasApiTokens;
    protected $table='children';
    protected $guarded= [];
    public $timestamps = false;

    public function children_account()
    {
    	return $this->hasOne('app\children_account');
    }

    public function history_user()
    {
        return $this->hasMany('app\history_user');
    }

    public function children_class()
    {
    	return $this->hasMany('app\children_class');
    }

    public function payment()
    {
    	return $this->hasMany('app\payment');
    }

    public function role()
    {
        return $this->belongsTo('app\role');
    }

    public function tem_children()
    {
        return $this->hadMany('app\tem_children');
    }

}
