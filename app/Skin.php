<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skin extends Model
{
    protected $guarded = array('id');
    

    public function user() 
    {
        return $this->hasMany('App\User');
    }
}
