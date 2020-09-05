<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    protected $guarded=['id'];

    public function get_recipe()
    {
        return $this->hasOne('App\Recipe','id','recipe_id');
    }
}
