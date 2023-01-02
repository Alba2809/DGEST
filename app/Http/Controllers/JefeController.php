<?php

namespace App\Http\Controllers;

use App\Mail\EgresadosMailable;
use App\Models\Egresado;
use App\Models\Jefe;
use App\Models\Muestra;
use App\Models\MuestraEgresado;
use App\Models\User;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
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
        $jefe = Jefe::where('email', Auth::user()->email)->first();
        $anioSelec = $request->get('AnioEgreso');
        $porcSelec = $request->get('PorcentajeM');

        $total = Egresado::where('carrera', $jefe->carrera)
            ->where('anio_egreso', $anioSelec)->count(); // 100%

        $numEgresados = ((int)$porcSelec * (int)$total) / 100;

        $egresadosSelc = Egresado::where('carrera', $jefe->carrera)
            ->where('anio_egreso', $anioSelec)
            ->where('form_hecho', 0)
            ->orderByRaw('RAND()')
            ->limit((int)$numEgresados)
            ->get();

        $warning = Muestra::where('carrera', $jefe->carrera)->where('anio', $anioSelec)->first();
        
        return redirect()->route('jefe.correo.index')->withInput()->with('total', $total)->with('egresados', $egresadosSelc)->with('anioSelec', $anioSelec)->with('porcSelec', $porcSelec)->with('numEgresados', $egresadosSelc->count())->with('warning', $warning);
    }

    public function enviar(Request $request){

        if (!$request)
            return back();

        $jefe = Jefe::where('email', Auth::user()->email)->first();

        $muestra = new Muestra();

        $muestra->carrera = $jefe->carrera;
        $muestra->anio = $request->Anio;
        $muestra->porc_selec = $request->Porcentaje;
        $muestra->total_selec = $request->Total;

        $muestra->save();

        foreach ($request->NoControl as $egresado) {
            $me = new MuestraEgresado();
            
            $me->id_muestra = $muestra->id;
            $me->no_control = $egresado;

            $me->save();

            $datosEgresado = Egresado::where('no_control_egresado', $egresado)->first();

            $user = User::where('email', $datosEgresado->email)->first();

            if (!$user) {
                $user = new User();
                $user->name = $datosEgresado->nombre;
                $user->email = $datosEgresado->email;
                $user->password = bcrypt('12345678');
                
                $user->save();
                
                $user->roles()->sync([3]);

            }
            
            Mail::to($user->email)->send(new EgresadosMailable($datosEgresado));
        }
        return back()->withInput()->with('success', 'Se ha registrado la nueva muestra y se enviaron correctamente los correos a los egresados.');
    }
}
