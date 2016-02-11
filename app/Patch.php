<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use User;

class Patch extends Model
{

    public function user()
    {
        return $this->belongsToMany('App\User');
    }

    public function image()
    {
        return $this->hasMany('App\Image');
    }
}
