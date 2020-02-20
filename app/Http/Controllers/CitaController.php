<?php

namespace App\Http\Controllers;

use App\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('citas.agendar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cita = new Cita();
        $cita->date = $request->fecha;
        $cita->hour = $request->hora;
        $cita->place = $request->place;
        $cita->description = $request->description;
        $cita->nameclient = $request->name_client;
        $cita->phoneclient = $request->phone_client;
        $cita->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $citas = Cita::paginate(5);
        return view('citas.listar', compact("citas"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cita = Cita::findOrFail($id);
        return view("citas.editar", compact("cita"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $cita = Cita::findOrFail($id);
      $cita->date = $request->fecha;
      $cita->hour = $request->hora;
      $cita->place = $request->place;
      $cita->description = $request->description;
      $cita->nameclient = $request->name_client;
      $cita->phoneclient = $request->phone_client;
      $cita->save();
      return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminar = Cita::findOrFail($id);
        $eliminar->delete();
        return back();
    }
}
