<?php

use Illuminate\Database\Seeder;
use App\Inmueble;
use App\Imagen;

class InmuebleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

      $inmueble = new Inmueble();
      $inmueble->address = 'Sogamoso, Boyacá, Barrio: El bosque';
      $inmueble->size = '42 m2';
      $inmueble->type = 'Arriendo';
      $inmueble->price = 2000;
      $inmueble->owner_phone = '3012345678';
      $inmueble->description = 'Tiene 5 habitaciones';
      $inmueble->url = 'img/casa1.jpg';
      $inmueble->save();

      $inmueble = new Inmueble();
      $inmueble->address = 'Sogamoso, boyacá, Barrio: Laguito';
      $inmueble->size = '96.00 m2';
      $inmueble->type = 'Venta';
      $inmueble->price = 2000;
      $inmueble->owner_phone = '3012345678';
      $inmueble->description = 'Tiene 5 habitaciones';
      $inmueble->url = 'img/casa1.jpg';
      $inmueble->save();
    }
}
