<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    //
    protected $table ="heroes";
    public function hero_image()
    {
        return $this->belongsToMany('App\Image');
    }

}
