<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Earthquakes extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function answer()
    {
        return $this->belongsTo('App\answer','year','Month','Day','D_value');
    }
}