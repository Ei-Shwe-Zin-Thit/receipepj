<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $guarded=['id'];

    public function category()
    {
        return $this->belongsTo('App\Category','cat_id','id');
    }
}
