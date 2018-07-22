<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaDiem extends Model
{
    protected $table = 'diadiem';

    public function tour(){
    	return $this->hasMany('App\Tour','diadiem_id','id');
    }
}
