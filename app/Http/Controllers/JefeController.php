<?php

namespace App\Http\Controllers;

use App\Models\Egresado;
use App\Models\Jefe;
use App\Models\User;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use League\CommonMark\Node\Block\Document;

class JefeController extends Controller
{
    public function index(){
        $jefe = Jefe::where('email', Auth::user()->email)->first();

        $listaAnio = [
            '2023' => '2023',
            '2022' => '2022',
            '2021' => '2021',
            '2020' => '2020',
            '2019' => '2019',
            '2018' => '2018',
            '2017' => '2017',
            '2016' => '2016',
            '2015' => '2015'
        ];

        $listaPorc = [
            '25' => '25',
            '50' => '50',
            '75' => '75',
            '100' => '100'
        ];

        $anioSelec = date("Y");

        if (session('total') < 100) {
            $porcSelec = '100';
        } else {
            $porcSelec = '25';
        }
        
        return view('jefes.index', compact('jefe', 'listaAnio', 'anioSelec', 'listaPorc', 'porcSelec'));
    }

    public function aleatorios(Request $request){
        $anioSelec = $request->get('AnioEgreso');
        $porcSelec = $request->get('PorcentajeM');

        $total = Egresado::where('anio_egreso', $anioSelec)->count(); // 100%

        $numEgresados = ((int)$porcSelec * (int)$total) / 100;

        $egresadosSelc = Egresado::where('anio_egreso', $anioSelec)
            ->where('form_hecho', 0)
            ->orderByRaw('RAND()')
            ->limit((int)$numEgresados)
            ->get();
        
        return redirect()->route('jefe.correo.index')->withInput()->with('total', $total)->with('egresados', $egresadosSelc);
    }

    public function enviar(Request $request){
        foreach ($request->NoControl as $egresado) {
            echo $egresado;
        }
        return $request->NoControl;
    }
}
