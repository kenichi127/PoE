<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Daydata extends Model
{   protected $table = 'daydata';
    public function earthquakes()
    {
        return $this->belongsTo('App\Earthquakes','year','Month','Day','value');
    }
}