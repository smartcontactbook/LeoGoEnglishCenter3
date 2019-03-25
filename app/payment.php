<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $table='payment';
    protected $guarded= [];
    public $timestamps = false;

    public function payment_method()
    {
    	return $this->belongsTo('app\providers\payment_method');
    }

    public function children()
    {
    	return $this->belongsTo('app\providers\children');
    }

    public function class()
    {
    	return $this->belongsTo('app\providers\class');
    }
}
