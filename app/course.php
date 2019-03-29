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
    	return $this->hasMany('app\lesson');
    }

    public function class()
    {
    	return $this->hasMany('app\class');
    }

    public function level()
    {
    	return $this->belongsTo('app\level');
    }
}
