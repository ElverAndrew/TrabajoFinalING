<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 2,
            'nombre' => 'Andrew',
            'apellido' => 'Quevedo',
            'email' => 'admin@example.com',
            'password' => Hash::make('Anorack18$'),
            'rol' => 'admin'
        ]);
    }
}
