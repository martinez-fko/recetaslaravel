<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Jose',
            'email' => 'correo@gmail.com',
            'password' => Hash::make('12345678'),
            'url' => 'http://127.0.0.1:8000/login',
        ]);
        $user->perfil()->create();

        $user2 = User::create([
            'name' => 'maria',
            'email' => 'maria@gmail.com',
            'password' => Hash::make('12345678'),
            'url' => 'http://127.0.0.1:8000/login',
        ]);
        $user2->perfil()->create();

    }
}
