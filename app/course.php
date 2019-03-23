<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $table='course';
    protected $guarded= [];
    protected $fillable = ['Course_Name', 'Description', 'Term', 'Level_ID'];
    public $timestamps = false;

    public function lesson()
    {
    	return $this->hasMany('app\providers\lesson');
    }

    public function class()
    {
    	return $this->hasMany('app\providers\class');
    }

    public function level()
    {
    	return $this->belongsTo('app\providers\level');
    }
}
