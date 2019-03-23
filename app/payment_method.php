<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment_method extends Model
{
    protected $table='table_payment_method';
    protected $guarded= [];

    public function payment()
    {
    	return $this->hasMany('app\providers\payment');
    }
}
