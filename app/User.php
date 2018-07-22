<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function binhluan(){
        return $this->hasMany('App\BinhLuan','users_id','id');
    }

    public function danhgia(){
        return $this->hasMany('App\DanhGia');
    }

    public function tour(){
        return $this -> hasMany('App\Tour','users_id','id');
    }

    public function donhang(){
        return $this -> hasMany('App\DonHang','users_id','id');
    }
}
