<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->nombre = "Administrador";
        $role->save();

        $role = new Role();
        $role->nombre = "Tecnico";
        $role->save();

        $role = new Role();
        $role->nombre = "Secretaria";
        $role->save();

        $role = new Role();
        $role->nombre = "Cliente";
        $role->save();

    }
}
