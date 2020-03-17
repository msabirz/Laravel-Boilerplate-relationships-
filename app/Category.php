<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //add this line

class Category extends Model
{
    //
    use SoftDeletes; //add this line
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
