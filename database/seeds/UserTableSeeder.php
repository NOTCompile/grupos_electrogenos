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
        $user = new User();
        $user->name = "Administrador";
        $user->email = "administrador@mail.com";
        $user->password = bcrypt('query');
        $user->role_id = 1;
        $user->save();
        $user->roles()->attach([1]);

        $user = new User();
        $user->name = "Tecnico";
        $user->email = "tecnico@mail.com";
        $user->password = bcrypt('query');
        $user->role_id = 2;
        $user->save();
        $user->roles()->attach([2]);

        $user = new User();
        $user->name = "Secretaria";
        $user->email = "secretaria@mail.com";
        $user->password = bcrypt('query');
        $user->role_id = 3;
        $user->save();
        $user->roles()->attach([3]);

        $user = new User();
        $user->name = "Cliente";
        $user->email = "cliente@mail.com";
        $user->password = bcrypt('query');
        $user->role_id = 4;
        $user->save();
        $user->roles()->attach([4]);

        
    }
}
