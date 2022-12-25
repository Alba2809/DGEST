<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'name' => 'Administrador',
            'email' => 'admin_dgest@itsx.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');
        
        User::create([
            'name' => 'Jefe Sistemas',
            'email' => 'sistemas_dgest@itsx.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Jefe');
        
        /* User::create([
            'name' => '',
            'email' => '197o00679@itsx.edu.mx',
            'password' => bcrypt('12345678')
        ])->assignRole('Egresado'); */
    }
}
