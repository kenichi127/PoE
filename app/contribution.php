<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Contribution extends Model
{
    protected $table = 'contributions';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}