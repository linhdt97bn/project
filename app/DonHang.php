<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    protected $table = 'donhang';

    protected $fillable = ['tinhtrangdon'];

    public function users(){
    	return $this->belongsTo('App\User');
    }

    public function tour(){
    	return $this->belongsTo('App\Tour');
    }
}
