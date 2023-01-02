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
        Jefe::create([
            'carrera' => 'Industrial',
            'nombre' => 'Roberto Mora Fernandez',
            'email' => 'industrial_dgest@itsx.com'
        ]);
        Jefe::create([
            'carrera' => 'Bioquímica',
            'nombre' => 'Lucia Bello Zamora',
            'email' => 'bioquimica_dgest@itsx.com'
        ]);
        Jefe::create([
            'carrera' => 'Electromecánica',
            'nombre' => 'Martin Cortina Peralta',
            'email' => 'electromecanica_dgest@itsx.com'
        ]);
        Jefe::create([
            'carrera' => 'Industrias Alimentarias',
            'nombre' => 'Josefina Carvajal Colorado',
            'email' => 'alimentarias_dgest@itsx.com'
        ]);
        Jefe::create([
            'carrera' => 'Civil',
            'nombre' => 'Jorge Mesa Quiroz',
            'email' => 'civil_dgest@itsx.com'
        ]);
        Jefe::create([
            'carrera' => 'Mecatrónica',
            'nombre' => 'Alejandro Bravo Rosales',
            'email' => 'mecatronica_dgest@itsx.com'
        ]);
    }
}
