<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;

class UserController extends Controller{

  public function index()
  {
    return view('empleados.crear');
  }


  public function create()
  {

  }


  public function store(Request $request)
  {
    $role_user = Role::where('name', 'user')->first();
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->password = bcrypt($request->password);
    $user->save();
    $user->roles()->attach($role_user);
    return back();
  }


  public function show()
  {
    $usuarios = User::orderBy('name', 'desc')->paginate(5);
    return view('empleados.listar', compact("usuarios"));
  }


  public function edit($id)
  {
    $usuario = User::findOrFail($id);
    return view("empleados.editar", compact("usuario"));
  }


  public function update(Request $request, $id)
  {
      $newUser = User::findOrFail($id);
      $newUser->name = $request->name;
      $newUser->email = $request->email;
      $newUser->phone = $request->phone;
      $newUser->save();
      return back();
  }

  public function destroy($id)
  {
    $eliminar = User::findOrFail($id);
    $eliminar->delete();
    return back();
  }
}
