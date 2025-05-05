<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Creando el Administrador

    $user = new User();
    $user->name = "Admin";
    $user->email = "76252483@continental.edu.pe";
    $user->password = bcrypt("76252483");
    $user->save();

    }
}
