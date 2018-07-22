<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tour';

    public function users()
    {
    	return $this->belongsTo('App\User');
    }

    public function binhluan(){
    	return $this -> hasMany('App\BinhLuan');
    }

    public function danhgia(){
    	return $this -> hasMany('App\DanhGia');
    }

    public function donhang(){
    	return $this -> hasMany('App\DonHang');
    }

    public function diadiem(){
        return $this -> belongsTo('App\DiaDiem');
    }
}
