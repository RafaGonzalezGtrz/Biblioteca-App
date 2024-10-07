<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = new User();
        $user->name = 'Rafa Gonzalez';
        $user->email = 'chikito.rafael@gmail.com';
        $user->password = '1111';
        $user->role = 'admin';
        $user->save();

        $user = new User();
        $user->name = 'Valeria Rodriguez';
        $user->email = 'valeria@gmail.com';
        $user->password = '1111';
        $user->role = 'user';
        $user->save();

        $user = new User();
        $user->name = 'Ariel Garcia';
        $user->email = 'ariel@gmail.com';
        $user->password = '1111';
        $user->role = 'user';
        $user->save();

        $user = new User();
        $user->name = 'Jesus Jimenez';
        $user->email = 'jesus@gmail.com';
        $user->password = '1111';
        $user->role = 'user';
        $user->save();

        $user = new User();
        $user->name = 'Manuel Gonzalez';
        $user->email = 'manuel@gmail.com';
        $user->password = '1111';
        $user->role = 'user';
        $user->save();
    }
}
