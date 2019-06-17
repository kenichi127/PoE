<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function earthquakes()
    {
        return $this->belongsTo('App\earthquakes');
    }
    public function daydata()
    {
        return $this->belongsTo('App\daydata');
    }
}
