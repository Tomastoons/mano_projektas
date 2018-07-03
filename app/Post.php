<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function group(){
        return $this->belongsTo('App\Group');
    }
}
