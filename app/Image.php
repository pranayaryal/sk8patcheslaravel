<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = "patch_images";
    protected $guarded = [];

    public function patch()
    {
        return $this->belongsTo('App\Patch');
    }

    public function scopePatchId(Builder $query, $patch_id)
    {
        return $query->where('patch_id', $patch_id);
    }


}
