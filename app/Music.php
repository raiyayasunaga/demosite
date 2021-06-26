<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    
    // protected $table = ‘musics;
    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
        'capo' => 'required',
        'category' => 'required',
    );

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
