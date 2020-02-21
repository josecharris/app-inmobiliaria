<?php

namespace App\Http\Controllers;

use App\Inmueble;
use Illuminate\Http\Request;

class InmuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inmuebles.crear');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $inmueble = new Inmueble();
      $inmueble->address = $request->address;
      $inmueble->size = $request->size;
      $inmueble->type = $request->type;
      $inmueble->price = $request->price;
      $inmueble->owner_phone = $request->owner_phone;
      $inmueble->description = $request->description;
      $inmueble->url = 'img/' . $request->url;
      $inmueble->save();
      return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inmueble  $inmueble
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $inmuebles = Inmueble::paginate(5);
        return view('inmuebles.listar', compact("inmuebles"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inmueble  $inmueble
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inmueble = Inmueble::findOrFail($id);
        return view("inmuebles.edit", compact("inmueble"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inmueble  $inmueble
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $inmueble = Inmueble::findOrFail($id);
      $inmueble->address = $request->address;
      $inmueble->size = $request->size;
      $inmueble->type = $request->type;
      $inmueble->price = $request->price;
      $inmueble->owner_phone = $request->owner_phone;
      $inmueble->description = $request->description;
      $inmueble->url = 'img/' . $request->url;
      $inmueble->save();
      return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inmueble  $inmueble
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $eliminar = Inmueble::findOrFail($id);
      $eliminar->delete();
      return back();
    }
}
