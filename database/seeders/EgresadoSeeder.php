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
            'no_control_egresado' => '197o01086',
            'nombre' => 'Luis Miguel Conde',
            'email' => '197o01086@itsx.edu.mx',
            'fecha_nac' => '2001-03-29',
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
        /* ********************************************************* */
        /* 147 */
        Egresado::create([
            'no_control_egresado' => '147O10001',
            'nombre' => 'Lidia Parra Ramos',
            'email' => '147O10001@itsx.edu.mx',
            'fecha_nac' => '1996-09-28',
            'curp' => 'PAAF771012HMCRGR09',
            'sexo' => 1,
            'carrera' => 'Sistemas Computacionales',
            'especialidad' => 'Software',
            'mes_egreso' => '12',
            'anio_egreso' => '2018',
            'form_hecho' => 0
        ]); 
        
        Egresado::create([
            'no_control_egresado' => '147O10002',
            'nombre' => 'Luz Reyes Medina',
            'email' => '147O10002@itsx.edu.mx',
            'fecha_nac' => '1996-09-28',
            'curp' => 'REE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Sistemas Computacionales',
            'especialidad' => 'Software',
            'mes_egreso' => '12',
            'anio_egreso' => '2018',
            'form_hecho' => 0
        ]); 
        
        Egresado::create([
            'no_control_egresado' => '147O10003',
            'nombre' => 'Ana Castro Fuentes',
            'email' => '147O10003@itsx.edu.mx',
            'fecha_nac' => '1996-09-28',
            'curp' => 'CAE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Sistemas Computacionales',
            'especialidad' => 'Software',
            'mes_egreso' => '12',
            'anio_egreso' => '2018',
            'form_hecho' => 0
        ]); 
        
        Egresado::create([
            'no_control_egresado' => '147O10004',
            'nombre' => 'Enrique Garrido Crespo',
            'email' => '147O10004@itsx.edu.mx',
            'fecha_nac' => '1996-09-28',
            'curp' => 'GAE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Sistemas Computacionales',
            'especialidad' => 'Software',
            'mes_egreso' => '12',
            'anio_egreso' => '2018',
            'form_hecho' => 0
        ]); 
        /* ******************************************** */
        /* 155 */        
        Egresado::create([
            'no_control_egresado' => '157O10001',
            'nombre' => 'Patricia Iglesias Gonzalez',
            'email' => '157O10001@itsx.edu.mx',
            'fecha_nac' => '1997-09-28',
            'curp' => 'IGE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Sistemas Computacionales',
            'especialidad' => 'Redes',
            'mes_egreso' => '12',
            'anio_egreso' => '2019',
            'form_hecho' => 0
        ]); 
        Egresado::create([
            'no_control_egresado' => '157O10002',
            'nombre' => 'Manuel Mendez Muñoz',
            'email' => '157O10002@itsx.edu.mx',
            'fecha_nac' => '1997-09-28',
            'curp' => 'MEE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Sistemas Computacionales',
            'especialidad' => 'Redes',
            'mes_egreso' => '12',
            'anio_egreso' => '2019',
            'form_hecho' => 0
        ]); 
        Egresado::create([
            'no_control_egresado' => '157O10003',
            'nombre' => 'Luis Pardo Rubio',
            'email' => '157O10003@itsx.edu.mx',
            'fecha_nac' => '1997-09-28',
            'curp' => 'xxE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Sistemas Computacionales',
            'especialidad' => 'Redes',
            'mes_egreso' => '12',
            'anio_egreso' => '2019',
            'form_hecho' => 0
        ]); 
        Egresado::create([
            'no_control_egresado' => '157O10004',
            'nombre' => 'Edgar Flores Navarro',
            'email' => '157O10004@itsx.edu.mx',
            'fecha_nac' => '1997-09-28',
            'curp' => 'FLE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Sistemas Computacionales',
            'especialidad' => 'Redes',
            'mes_egreso' => '12',
            'anio_egreso' => '2019',
            'form_hecho' => 0
        ]); 

        /* **************************************************************** */
        /* 167 */
        Egresado::create([
            'no_control_egresado' => '167O10001',
            'nombre' => 'Maria Moreno Prieto',
            'email' => '167O10001@itsx.edu.mx',
            'fecha_nac' => '1998-09-28',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Sistemas Computacionales',
            'especialidad' => 'Redes',
            'mes_egreso' => '12',
            'anio_egreso' => '2020',
            'form_hecho' => 0
        ]); 
        Egresado::create([
            'no_control_egresado' => '167O10002',
            'nombre' => 'Alberto Santana Gil',
            'email' => '167O10002@itsx.edu.mx',
            'fecha_nac' => '1998-09-28',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Sistemas Computacionales',
            'especialidad' => 'Redes',
            'mes_egreso' => '12',
            'anio_egreso' => '2020',
            'form_hecho' => 0
        ]); 
        Egresado::create([
            'no_control_egresado' => '167O10003',
            'nombre' => 'Gustavo Molina Gallego',
            'email' => '167O10003@itsx.edu.mx',
            'fecha_nac' => '1998-09-28',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Sistemas Computacionales',
            'especialidad' => 'Redes',
            'mes_egreso' => '12',
            'anio_egreso' => '2020',
            'form_hecho' => 0
        ]); 
        Egresado::create([
            'no_control_egresado' => '167O10004',
            'nombre' => 'Guadalupe Herrera Lozano',
            'email' => '167O10004@itsx.edu.mx',
            'fecha_nac' => '1998-09-28',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Sistemas Computacionales',
            'especialidad' => 'Software',
            'mes_egreso' => '12',
            'anio_egreso' => '2020',
            'form_hecho' => 0
        ]); 

        /* ****************************************************************** */
        /* 177 */
        Egresado::create([
            'no_control_egresado' => '177O10001',
            'nombre' => 'Mauricio Guerra Salas',
            'email' => '177O10001@itsx.edu.mx',
            'fecha_nac' => '1999-09-28',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Sistemas Computacionales',
            'especialidad' => 'Redes',
            'mes_egreso' => '12',
            'anio_egreso' => '2021',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '177O10002',
            'nombre' => 'Roberto Lopez Hernandez',
            'email' => '177O10002@itsx.edu.mx',
            'fecha_nac' => '1999-09-28',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Sistemas Computacionales',
            'especialidad' => 'Redes',
            'mes_egreso' => '12',
            'anio_egreso' => '2021',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '177O10003',
            'nombre' => 'Sofia Peredo Camacho',
            'email' => '177O10003@itsx.edu.mx',
            'fecha_nac' => '1999-09-28',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Sistemas Computacionales',
            'especialidad' => 'Software',
            'mes_egreso' => '12',
            'anio_egreso' => '2021',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '177O100014',
            'nombre' => 'Alejandra Cabrera Cano',
            'email' => '177O100014@itsx.edu.mx',
            'fecha_nac' => '1999-09-28',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Sistemas Computacionales',
            'especialidad' => 'Software',
            'mes_egreso' => '12',
            'anio_egreso' => '2021',
            'form_hecho' => 0
        ]);
        /* ******************************************************* */
        /* 187 */
        Egresado::create([
            'no_control_egresado' => '187O10001',
            'nombre' => 'Rafael Quiñonez Ortiz',
            'email' => '187O10001@itsx.edu.mx',
            'fecha_nac' => '2000-09-28',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Sistemas Computacionales',
            'especialidad' => 'Software',
            'mes_egreso' => '12',
            'anio_egreso' => '2022',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '187O10002',
            'nombre' => 'Rogelio Peredo Zapata',
            'email' => '187O10002@itsx.edu.mx',
            'fecha_nac' => '2000-09-28',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Sistemas Computacionales',
            'especialidad' => 'Redes',
            'mes_egreso' => '12',
            'anio_egreso' => '2022',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '187O10003',
            'nombre' => 'Gerardo Paredes Pinto',
            'email' => '187O10003@itsx.edu.mx',
            'fecha_nac' => '2000-09-28',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Sistemas Computacionales',
            'especialidad' => 'Redes',
            'mes_egreso' => '12',
            'anio_egreso' => '2022',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '187O10004',
            'nombre' => 'Omar García Sanchez',
            'email' => '187O10004@itsx.edu.mx',
            'fecha_nac' => '2000-09-28',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Sistemas Computacionales',
            'especialidad' => 'Software',
            'mes_egreso' => '12',
            'anio_egreso' => '2022',
            'form_hecho' => 0
        ]);

        /* *********************************************************** */
        /* 197 */
        Egresado::create([
            'no_control_egresado' => '197O10001',
            'nombre' => 'Rodrigo Benitez Montero',
            'email' => '197O10001@itsx.edu.mx',
            'fecha_nac' => '2001-09-28',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Sistemas Computacionales',
            'especialidad' => 'Software',
            'mes_egreso' => '12',
            'anio_egreso' => '2023',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '197O10002',
            'nombre' => 'Pedro Martinez Peres',
            'email' => '197O10002@itsx.edu.mx',
            'fecha_nac' => '2001-09-28',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Sistemas Computacionales',
            'especialidad' => 'Software',
            'mes_egreso' => '12',
            'anio_egreso' => '2023',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '197O10003',
            'nombre' => 'Francisco Cortes Mesa',
            'email' => '197O10003@itsx.edu.mx',
            'fecha_nac' => '2001-09-28',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Sistemas Computacionales',
            'especialidad' => 'Software',
            'mes_egreso' => '12',
            'anio_egreso' => '2023',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '197O10004',
            'nombre' => 'Reina Marques Cruz',
            'email' => '197O10004@itsx.edu.mx',
            'fecha_nac' => '2001-09-28',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Sistemas Computacionales',
            'especialidad' => 'Software',
            'mes_egreso' => '12',
            'anio_egreso' => '2023',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '197O10005',
            'nombre' => 'Martina Blaco Torres',
            'email' => '197O10005@itsx.edu.mx',
            'fecha_nac' => '2001-09-28',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Sistemas Computacionales',
            'especialidad' => 'Software',
            'mes_egreso' => '12',
            'anio_egreso' => '2023',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '197O10006',
            'nombre' => 'Leonel Robles Carmona',
            'email' => '197O10006@itsx.edu.mx',
            'fecha_nac' => '2001-09-28',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Sistemas Computacionales',
            'especialidad' => 'Software',
            'mes_egreso' => '12',
            'anio_egreso' => '2023',
            'form_hecho' => 0
        ]);

        /* *************************************************************************************************************************
        ***************************************************************************************************************************
        ***************************************************************************************************************************
        *******************************************GESTION EMPRESARIAL*************************************************************
        ***************************************************************************************************************************
        ***************************************************************************************************************************
         */

        
        /* ********************************************************* */
        /* 147 */
        Egresado::create([
            'no_control_egresado' => '147O10011',
            'nombre' => 'Abigail Sanchezes Sandoval',
            'email' => '147O10011@itsx.edu.mx',
            'fecha_nac' => '1996-05-24',
            'curp' => 'SAAF771012HMCRGR09',
            'sexo' => 1,
            'carrera' => 'Gestión Empresarial',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2018',
            'form_hecho' => 0
        ]); 
        
        Egresado::create([
            'no_control_egresado' => '147O10022',
            'nombre' => 'Abril Jimenez Perez',
            'email' => '147O10022@itsx.edu.mx',
            'fecha_nac' => '1996-01-12',
            'curp' => 'JIE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Gestión Empresarial',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2018',
            'form_hecho' => 0
        ]); 
        
        Egresado::create([
            'no_control_egresado' => '147O10033',
            'nombre' => 'Jose Aguilar Dominguez',
            'email' => '147O10033@itsx.edu.mx',
            'fecha_nac' => '1996-09-28',
            'curp' => 'CAE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Gestión Empresarial',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2018',
            'form_hecho' => 0
        ]); 
        
        Egresado::create([
            'no_control_egresado' => '147O10044',
            'nombre' => 'Oscar Villegas Santos',
            'email' => '147O10044@itsx.edu.mx',
            'fecha_nac' => '1996-11-08',
            'curp' => 'VUE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Gestión Empresarial',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2018',
            'form_hecho' => 0
        ]); 
        /* ******************************************** */
        /* 155 */        
        Egresado::create([
            'no_control_egresado' => '157O10011',
            'nombre' => 'Angel Olmos Castillo',
            'email' => '157O10011@itsx.edu.mx',
            'fecha_nac' => '1997-10-28',
            'curp' => 'OLE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Gestión Empresarial',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2019',
            'form_hecho' => 0
        ]); 
        Egresado::create([
            'no_control_egresado' => '157O10222',
            'nombre' => 'Juan Guerrero Gonzalez',
            'email' => '157O10222@itsx.edu.mx',
            'fecha_nac' => '1997-06-18',
            'curp' => 'GEE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Gestión Empresarial',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2019',
            'form_hecho' => 0
        ]); 
        Egresado::create([
            'no_control_egresado' => '157O10333',
            'nombre' => 'Hector Rodriguez',
            'email' => '157O10333@itsx.edu.mx',
            'fecha_nac' => '1997-01-21',
            'curp' => 'xxE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Gestión Empresarial',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2019',
            'form_hecho' => 0
        ]); 
        Egresado::create([
            'no_control_egresado' => '157O10004',
            'nombre' => 'Luis Ojeda Alarcon',
            'email' => '157O10004@itsx.edu.mx',
            'fecha_nac' => '1997-09-28',
            'curp' => 'FLE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Gestión Empresarial',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2019',
            'form_hecho' => 0
        ]); 

        /* **************************************************************** */
        /* 167 */
        Egresado::create([
            'no_control_egresado' => '167O10011',
            'nombre' => 'Lucas Mendez Gil',
            'email' => '167O10011@itsx.edu.mx',
            'fecha_nac' => '1998-09-28',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Gestión Empresarial',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2020',
            'form_hecho' => 0
        ]); 
        Egresado::create([
            'no_control_egresado' => '167O10022',
            'nombre' => 'Adelita Rueda Cordero',
            'email' => '167O10022@itsx.edu.mx',
            'fecha_nac' => '1998-03-18',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Gestión Empresarial',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2020',
            'form_hecho' => 0
        ]); 
        Egresado::create([
            'no_control_egresado' => '167O10033',
            'nombre' => 'Saharai Mondragon Alarcon',
            'email' => '167O10033@itsx.edu.mx',
            'fecha_nac' => '1998-02-28',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Gestión Empresarial',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2020',
            'form_hecho' => 0
        ]); 
        Egresado::create([
            'no_control_egresado' => '167O10044',
            'nombre' => 'Ismael Diaz Gaona',
            'email' => '167O10044@itsx.edu.mx',
            'fecha_nac' => '1998-09-28',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Gestión Empresarial',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2020',
            'form_hecho' => 0
        ]); 

        /* ****************************************************************** */
        /* 177 */
        Egresado::create([
            'no_control_egresado' => '177O10001',
            'nombre' => 'Gabriel Vasquez Cortes',
            'email' => '177O10001@itsx.edu.mx',
            'fecha_nac' => '1999-09-28',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Gestión Empresarial',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2021',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '177O10022',
            'nombre' => 'Tomas Salomon Alvarez',
            'email' => '177O10022@itsx.edu.mx',
            'fecha_nac' => '1999-02-20',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Gestión Empresarial',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2021',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '177O10033',
            'nombre' => 'Neftali Caballero Flores',
            'email' => '177O10033@itsx.edu.mx',
            'fecha_nac' => '1999-01-11',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Gestión Empresarial',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2021',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '177O10044',
            'nombre' => 'Mariana Delgado Hernandez',
            'email' => '177O10044@itsx.edu.mx',
            'fecha_nac' => '1999-09-28',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Gestión Empresarial',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2021',
            'form_hecho' => 0
        ]);
        /* ******************************************************* */
        /* 187 */
        Egresado::create([
            'no_control_egresado' => '187O10011',
            'nombre' => 'Gladis Ibañez Iglesias',
            'email' => '187O10011@itsx.edu.mx',
            'fecha_nac' => '2000-01-18',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Gestión Empresarial',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2022',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '187O10022',
            'nombre' => 'Pablo Garrido Marin',
            'email' => '187O10022@itsx.edu.mx',
            'fecha_nac' => '2000-11-18',
            'curp' => 'XXE010522HVZLRVA3',/* <- Aquí */
            'sexo' => 0,
            'carrera' => 'Gestión Empresarial',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2022',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '187O10033',
            'nombre' => 'Sain Hidalgo Crespo',
            'email' => '187O10033@itsx.edu.mx',
            'fecha_nac' => '2000-11-11',
            'curp' => 'XXE010522HVZLR2A3',
            'sexo' => 0,
            'carrera' => 'Gestión Empresarial',
            'especialidad' => 'a',
            'mes_egreso' => '12',/* <-- */
            'anio_egreso' => '2022',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '187O10044',
            'nombre' => 'Liliana Montero Duran',
            'email' => '187O10044@itsx.edu.mx',
            'fecha_nac' => '2000-09-02',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Gestión Empresarial',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2022',
            'form_hecho' => 0
        ]);

        /* *********************************************************** */
        /* 197 */
        Egresado::create([
            'no_control_egresado' => '197O10011',
            'nombre' => 'Alma Soler Ortiz',
            'email' => '197O10011@itsx.edu.mx',
            'fecha_nac' => '2001-04-18',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Gestión Empresarial',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2023',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '197O10022',
            'nombre' => 'Rosa Vidal Peña',
            'email' => '197O10022@itsx.edu.mx',
            'fecha_nac' => '2001-03-16',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Gestión Empresarial',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2023',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '197O10033',
            'nombre' => 'Rosario Roman Saez',
            'email' => '197O10033@itsx.edu.mx',
            'fecha_nac' => '2001-09-28',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Gestión Empresarial',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2023',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '197O10044',
            'nombre' => 'Elide Sanz Molina',
            'email' => '197O10044@itsx.edu.mx',
            'fecha_nac' => '2001-09-28',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Gestión Empresarial',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2023',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '197O10055',
            'nombre' => 'Margatita Ochoa Campo',
            'email' => '197O10055@itsx.edu.mx',
            'fecha_nac' => '2001-11-06',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Gestión Empresarial',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2023',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '197O10006',
            'nombre' => 'Hugo Rebolledo Gutierrez',
            'email' => '197O10006@itsx.edu.mx',
            'fecha_nac' => '2001-04-21',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Gestión Empresarial',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2023',
            'form_hecho' => 0
        ]);


        /* *************************************************************************************************************************
        ***************************************************************************************************************************
        ***************************************************************************************************************************
        *******************************************CIVIL*************************************************************
        ***************************************************************************************************************************
        ***************************************************************************************************************************
         */

        
        /* ********************************************************* */
        /* 147 */
        Egresado::create([
            'no_control_egresado' => '147O10111',
            'nombre' => 'Manuel Nieto Ortiz',
            'email' => '147O10111@itsx.edu.mx',
            'fecha_nac' => '1996-03-24',
            'curp' => 'SAAF771012HMCRGR09',
            'sexo' => 0,
            'carrera' => 'Civil',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2018',
            'form_hecho' => 0
        ]); 
        
        Egresado::create([
            'no_control_egresado' => '147O10222',
            'nombre' => 'Faustino Pastor Mora',
            'email' => '147O1222@itsx.edu.mx',
            'fecha_nac' => '1996-01-12',
            'curp' => 'JIE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Civil',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2018',
            'form_hecho' => 0
        ]); 
        
        Egresado::create([
            'no_control_egresado' => '147O10333',
            'nombre' => 'Ruben Leon Gurrero',
            'email' => '147O1333@itsx.edu.mx',
            'fecha_nac' => '1996-07-18',
            'curp' => 'CAE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Civil',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2018',
            'form_hecho' => 0
        ]); 
        
        Egresado::create([
            'no_control_egresado' => '147O10444',
            'nombre' => 'Uriel Castro Santana',
            'email' => '147O10444@itsx.edu.mx',
            'fecha_nac' => '1996-10-08',
            'curp' => 'CAE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Civil',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2018',
            'form_hecho' => 0
        ]); 
        /* ******************************************** */
        /* 155 */        
        Egresado::create([
            'no_control_egresado' => '157O10111',
            'nombre' => 'Amy Parra Cortes',
            'email' => '157O10111@itsx.edu.mx',
            'fecha_nac' => '1997-06-08',
            'curp' => 'PAE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Civil',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2019',
            'form_hecho' => 0
        ]); 
        Egresado::create([
            'no_control_egresado' => '157O10222',
            'nombre' => 'Vanessa Cruz Quintero',
            'email' => '157O10222@itsx.edu.mx',
            'fecha_nac' => '1997-06-18',
            'curp' => 'GEE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Civil',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2019',
            'form_hecho' => 0
        ]); 
        Egresado::create([
            'no_control_egresado' => '157O10333',
            'nombre' => 'Teresa Moya Ramos',
            'email' => '157O10333@itsx.edu.mx',
            'fecha_nac' => '1997-01-21',
            'curp' => 'xxE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Civil',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2019',
            'form_hecho' => 0
        ]); 
        Egresado::create([
            'no_control_egresado' => '157O10444',
            'nombre' => 'Maria Cano Hernandez',
            'email' => '157O10444@itsx.edu.mx',
            'fecha_nac' => '1997-02-22',
            'curp' => 'FLE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Civil',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2019',
            'form_hecho' => 0
        ]); 

        /* **************************************************************** */
        /* 167 */
        Egresado::create([
            'no_control_egresado' => '167O10111',
            'nombre' => 'Salome Benitez Arias',
            'email' => '167O10111@itsx.edu.mx',
            'fecha_nac' => '1998-04-09',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Civil',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2020',
            'form_hecho' => 0
        ]); 
        Egresado::create([
            'no_control_egresado' => '167O10222',
            'nombre' => 'Riquelme Alonso Bravo',
            'email' => '167O10222@itsx.edu.mx',
            'fecha_nac' => '1998-02-11',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Civil',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2020',
            'form_hecho' => 0
        ]); 
        Egresado::create([
            'no_control_egresado' => '167O10333',
            'nombre' => 'Gerardo Campos Mondragon',
            'email' => '167O10333@itsx.edu.mx',
            'fecha_nac' => '1998-05-16',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Civil',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2020',
            'form_hecho' => 0
        ]); 
        Egresado::create([
            'no_control_egresado' => '167O10444',
            'nombre' => 'Sofia Fuentes Cambil',
            'email' => '167O10444@itsx.edu.mx',
            'fecha_nac' => '1998-08-01',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Civil',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2020',
            'form_hecho' => 0
        ]); 

        /* ****************************************************************** */
        /* 177 */
        Egresado::create([
            'no_control_egresado' => '177O10111',
            'nombre' => 'Humberto Pio Lopez',
            'email' => '177O10111@itsx.edu.mx',
            'fecha_nac' => '1999-09-28',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Civil',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2021',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '177O10222',
            'nombre' => 'Antonio Blesa Delgado',
            'email' => '177O10222@itsx.edu.mx',
            'fecha_nac' => '1999-05-21',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Civil',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2021',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '177O10333',
            'nombre' => 'Mauricio Herrera Noriega',
            'email' => '177O10333@itsx.edu.mx',
            'fecha_nac' => '1999-01-11',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Civil',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2021',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '177O10444',
            'nombre' => 'Armando Matus Baez',
            'email' => '177O10444@itsx.edu.mx',
            'fecha_nac' => '1999-09-28',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Civil',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2021',
            'form_hecho' => 0
        ]);
        /* ******************************************************* */
        /* 187 */
        Egresado::create([
            'no_control_egresado' => '187O10111',
            'nombre' => 'Sebastian Ochoa Rivas',
            'email' => '187O10111@itsx.edu.mx',
            'fecha_nac' => '2000-01-18',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Civil',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2022',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '187O10222',
            'nombre' => 'Carlos Navarro Medina',
            'email' => '187O10022@itsx.edu.mx',
            'fecha_nac' => '2000-10-08',
            'curp' => 'XXE010522HVZLRVA3',/* <- Aquí */
            'sexo' => 0,
            'carrera' => 'Civil',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2022',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '187O10333',
            'nombre' => 'Yesenia Ortiz Herrero',
            'email' => '187O10333@itsx.edu.mx',
            'fecha_nac' => '2000-11-11',
            'curp' => 'XXE010522HVZLR2A3',
            'sexo' => 1,
            'carrera' => 'Civil',
            'especialidad' => 'a',
            'mes_egreso' => '12',/* <-- */
            'anio_egreso' => '2022',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '187O10444',
            'nombre' => 'Dulce Lorenzo Lozano',
            'email' => '187O10444@itsx.edu.mx',
            'fecha_nac' => '2000-05-06',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Civil',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2022',
            'form_hecho' => 0
        ]);

        /* *********************************************************** */
        /* 197 */
        Egresado::create([
            'no_control_egresado' => '197O10111',
            'nombre' => 'Milagros Calvo Rey',
            'email' => '197O10111@itsx.edu.mx',
            'fecha_nac' => '2001-04-18',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Civil',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2023',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '197O10222',
            'nombre' => 'Dionicio Serrano Torres',
            'email' => '197O10222@itsx.edu.mx',
            'fecha_nac' => '2001-03-16',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Civil',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2023',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '197O10333',
            'nombre' => 'Daniela Vega Labrador',
            'email' => '197O10333@itsx.edu.mx',
            'fecha_nac' => '2001-09-28',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Civil',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2023',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '197O10444',
            'nombre' => 'Montserrat Pomarez Cardenas',
            'email' => '197O10444@itsx.edu.mx',
            'fecha_nac' => '2001-07-11',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Civil',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2023',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '197O10555',
            'nombre' => 'Victor Leal Lozada',
            'email' => '197O10555@itsx.edu.mx',
            'fecha_nac' => '2001-11-06',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 0,
            'carrera' => 'Civil',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2023',
            'form_hecho' => 0
        ]);
        Egresado::create([
            'no_control_egresado' => '197O10666',
            'nombre' => 'Alejandra Lopez Amores',
            'email' => '197O10666@itsx.edu.mx',
            'fecha_nac' => '2001-04-21',
            'curp' => 'XXE010522HVZLRVA3',
            'sexo' => 1,
            'carrera' => 'Civil',
            'especialidad' => 'a',
            'mes_egreso' => '12',
            'anio_egreso' => '2023',
            'form_hecho' => 0
        ]);

    }
}
