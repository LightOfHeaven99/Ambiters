<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Registers extends Model
{
    public $primaryKey = 'id';

    public $timeStamps =true;

    public function user(){
      return $this->belongsTo('App\User');
    }
}
