<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function citas(){
      return $this->hasMany('App\Cita');
    }
}
