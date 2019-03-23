<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tutor_account extends Model
{
    protected $table='table_tutor_account';
    protected $guarded= [];

    public function tutor()
    {
    	return $this->belongsTo('app\providers\tutor');
    }
}
