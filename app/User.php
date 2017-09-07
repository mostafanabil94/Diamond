<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    public function services(){
        return $this->hasMany('App\Service');
    }

    public function messages(){
        return $this->hasMany('App\Message');
    }
}
