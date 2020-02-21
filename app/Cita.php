<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    public function cliente(){
      return $this->belongsTo('App\Cliente');
    }

    public function Inmueble(){
      return $this->belongsTo('App\Inmueble');
    }
}
