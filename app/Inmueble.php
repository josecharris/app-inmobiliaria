<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{

  public function citas(){
      return $this->hasMany('App\Cita');
  }
}
