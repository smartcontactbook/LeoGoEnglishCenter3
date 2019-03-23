<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tutor_account extends Model
{
    protected $table='tutor_account';
    protected $guarded= [];
    public $timestamps = false;

    public function tutor()
    {
    	return $this->belongsTo('app\providers\tutor');
    }
}
