<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Patch extends Model
{
    protected $fillable = [

        'patch_name' ,
        'price' ,
        'description'
    ];

    public function photos()
    {
        return $this->hasMany('App\Photo');
    }

    public function addPhotos()
    {
        return $this->photos()->save();
    }
}
