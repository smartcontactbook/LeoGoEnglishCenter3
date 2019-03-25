<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment_method extends Model
{
    protected $table='payment_method';
    protected $guarded= [];
    public $timestamps = false;

    public function payment()
    {
    	return $this->hasMany('app\providers\payment');
    }
}
