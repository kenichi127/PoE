<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Daydata extends Model
{   protected $table = 'daydata';
    protected $guarded = ['id'];
    public function earthquakes()
    {
        return $this->belongsTo('App\Earthquakes','year','Month','Day','value');
    }
    public function answer()
    {
        return $this->belongsTo('App\answer','year','Month','Day','value');
    }

}