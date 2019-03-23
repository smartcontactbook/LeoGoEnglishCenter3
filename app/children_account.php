<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class children_account extends Model
{
    protected $table='table_children_account';
    protected $guarded= [];

    public function children()
    {
    	return $this->belongsTo('app\providers\children');
    }
}
