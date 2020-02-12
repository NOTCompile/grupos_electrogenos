<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_administrador = Role::where('nombre', 'Administrador')->first();
        $role_tecnico = Role::where('nombre', 'Tecnico')->first();
        $role_secretaria = Role::where('nombre', 'Secretaria')->first();
        $role_cliente = Role::where('nombre', 'Cliente')->first();

        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@mail.com";
        $user->password = bcrypt('query');
        $user->save();
        $user->roles()->attach($role_administrador);

        $user = new User();
        $user->name = "Tecnico";
        $user->email = "tecnico@mail.com";
        $user->password = bcrypt('query');
        $user->save();
        $user->roles()->attach($role_tecnico);

        $user = new User();
        $user->name = "Secretaria";
        $user->email = "secretaria@mail.com";
        $user->password = bcrypt('query');
        $user->save();
        $user->roles()->attach($role_secretaria);

        $user = new User();
        $user->name = "Cliente";
        $user->email = "cliente@mail.com";
        $user->password = bcrypt('query');
        $user->save();
        $user->roles()->attach($role_cliente);



    }
}
