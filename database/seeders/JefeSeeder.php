<?php

namespace Database\Seeders;

use App\Models\Jefe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JefeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jefe::create([
            'carrera' => 'Sistemas Computacionales',
            'nombre' => 'Alberto Hernandez Perez',
            'email' => 'sistemas_dgest@itsx.com'
        ]);
        Jefe::create([
            'carrera' => 'Gastronomía',
            'nombre' => 'Juan Díaz Contreras',
            'email' => 'gastronomia_dgest@itsx.com'
        ]);
        Jefe::create([
            'carrera' => 'Gestión Empresarial',
            'nombre' => 'Pedro Fernández Espinoza',
            'email' => 'gestion_dgest@itsx.com'
        ]);
    }
}
