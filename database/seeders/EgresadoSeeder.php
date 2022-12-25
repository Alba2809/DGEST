<?php

namespace Database\Seeders;

use App\Models\Egresado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EgresadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Egresado::create([
            'no_control_egresado' => '197o00679',
            'nombre' => 'Jose Ivan Alba Garcia',
            'email' => '197o00679@itsx.edu.mx',
            'fecha_nac' => '2001-09-28',
            'curp' => 'AAGI010928HVZLRVA1',
            'sexo' => 0,
            'carrera' => 'Sistemas Computacionales',
            'especialidad' => 'Software',
            'mes_egreso' => '12',
            'anio_egreso' => '2023',
            'form_hecho' => 0
        ]);
        
        Egresado::create([
            'no_control_egresado' => '197o00678',
            'nombre' => 'Jonathan Pale Colorado',
            'email' => '197o00678@itsx.edu.mx',
            'fecha_nac' => '2001-09-28',
            'curp' => 'JPC011001HVZLRVA2',
            'sexo' => 0,
            'carrera' => 'Sistemas Computacionales',
            'especialidad' => 'Software',
            'mes_egreso' => '12',
            'anio_egreso' => '2023',
            'form_hecho' => 0
        ]);
        
        Egresado::create([
            'no_control_egresado' => '197o00677',
            'nombre' => 'Luis Miguel Conde',
            'email' => '197o00677@itsx.edu.mx',
            'fecha_nac' => '2001-09-28',
            'curp' => 'LMC010208HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Sistemas Computacionales',
            'especialidad' => 'Software',
            'mes_egreso' => '12',
            'anio_egreso' => '2023',
            'form_hecho' => 0
        ]);
        
        Egresado::create([
            'no_control_egresado' => '197o00676',
            'nombre' => 'Evelin Montero Gomez',
            'email' => '197o00676@itsx.edu.mx',
            'fecha_nac' => '2001-09-28',
            'curp' => 'MGE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Sistemas Computacionales',
            'especialidad' => 'Software',
            'mes_egreso' => '12',
            'anio_egreso' => '2023',
            'form_hecho' => 0
        ]);

    }
}
