<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crea un usuario con un nombre de usuario y contraseña conocidos

        User::create([
            'username' => 'empleado1', // Nombre de usuario conocido
            'password' => Hash::make('prueba1'), // Contraseña conocida
        ]);
        

        // Llama a otros seeders si los necesitas
        // $this->call(OtherSeeder::class);
    }
}
