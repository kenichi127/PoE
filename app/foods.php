<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
