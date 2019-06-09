<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registers extends Model
{
    public $primaryKey = 'id';

    public $timeStamps =true;

    public function user(){
      retun $this-belongsTo('App\User');
    }
}
