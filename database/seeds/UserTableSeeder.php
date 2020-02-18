<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_user = Role::where('name', 'user')->first();
      $role_admin = Role::where('name', 'admin')->first();
      // USUARIO NORMAL
      $user = new User();
      $user->name = 'Empleado';
      $user->email = 'empleado@example.com';
      $user->phone = '3123456789';
      $user->password = bcrypt('secret');
      $user->save();
      $user->roles()->attach($role_user);
      // USUARIO ADMIN
      $user = new User();
      $user->name = 'Admin';
      $user->email = 'admin@example.com';
      $user->phone = '3123456788';
      $user->password = bcrypt('secret');
      $user->save();
      $user->roles()->attach($role_admin);
    }
}
