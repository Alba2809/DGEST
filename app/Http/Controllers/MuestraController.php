<?php

namespace App\Http\Controllers;

use App\Charts\MuestraChart;
use App\Mail\EgresadosMailable;
use App\Models\Egresado;
use App\Models\Jefe;
use App\Models\Muestra;
use App\Models\MuestraEgresado;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\Array_;

class MuestraController extends Controller
{
    public function index()
    {
        $muestras = Muestra::all();

        $jefe = Jefe::where('email', Auth::user()->email)->first();

        return view('muestras.index', compact('muestras', 'jefe'));
    }

    public function show(Muestra $muestra)
    {
        $egresados = MuestraEgresado::select('muestras_egresados.*', 'egresados.form_hecho')
            ->join('egresados','muestras_egresados.no_control','=','egresados.no_control_egresado')
            ->where('id_muestra', $muestra->id)
            ->get();

        $respuestas = MuestraEgresado::where('id_muestra', $muestra->id)->whereNotNull('formulario')->count();

        //porc_selec = No. Egresados Seleccionados
        //    X      = $respuestas

        $porc_obtenido = ($muestra->porc_selec * $respuestas) / $muestra->total_selec;

        //tiempo transcurrido
        $fecha_inicial = Carbon::createFromFormat('Y-m-d', $muestra->created_at->format('Y-m-d'));
        $fecha_actual = Carbon::createFromFormat('Y-m-d', Carbon::now()->format('Y-m-d'));

        $dias_transcurridos = $fecha_actual->diffInDays($fecha_inicial);

        $total = Egresado::where('anio_egreso', $muestra->anio)->count();
        
        //obtener valores de la grafica
        $finalizados = MuestraEgresado::select('muestras_egresados.*', 'egresados.form_hecho')
            ->join('egresados','muestras_egresados.no_control','=','egresados.no_control_egresado')
            ->where('id_muestra', $muestra->id)
            ->whereNotNull('formulario')
            ->count();

        $proceso = MuestraEgresado::select('muestras_egresados.*', 'egresados.form_hecho')
            ->join('egresados','muestras_egresados.no_control','=','egresados.no_control_egresado')
            ->where('id_muestra', $muestra->id)
            ->where('form_hecho', '1')
            ->whereNull('formulario')
            ->count();
        
        $sinempezar = MuestraEgresado::select('muestras_egresados.*', 'egresados.form_hecho')
            ->join('egresados','muestras_egresados.no_control','=','egresados.no_control_egresado')
            ->where('id_muestra', $muestra->id)
            ->where('form_hecho', '0')
            ->whereNull('formulario')
            ->count();

        //se muestran los charts/graficas con los resultados
        $chart = new MuestraChart;
        $chart->labels(['Finalizados', 'Sin empezar', 'En proceso']);
        $chart->dataset('', 'pie', [$finalizados, $sinempezar, $proceso])->backgroundColor(['green', 'red', 'yellow']);
        $chart->title('Resultados generales');
        $chart->displayAxes(false);

        return view('muestras.detalles', compact('muestra', 'egresados', 'porc_obtenido', 'dias_transcurridos', 'total', 'chart', 'proceso'));
    }

    public function edit(Muestra $muestra)
    {

        /**
         * Se borran los usuarios de los egresados viejos.
         */
        $egresados_viejos = MuestraEgresado::where('id_muestra', $muestra->id)->whereNull('formulario')->get(); //Egresados que no ha contestado al formulario
        
        $lista_noControl = collect([]);
        foreach ($egresados_viejos as $egresado) {
            $lista_noControl->push($egresado->no_control);
        }

        $emails_viejos = Egresado::whereIn('no_control_egresado', $lista_noControl)->get();
        foreach ($emails_viejos as $email) {
            $user = new User();
            $user = User::where('email', $email->email)->first();
            if($user){
                $user->roles()->detach();
                $user->delete();
            }
        }

        /**
         * Obtener los egresados que no han contestado.
         * Obtener los nuevos egresados que no han sido seleccionados.
         */
        $total = MuestraEgresado::where('id_muestra', $muestra->id)->whereNull('formulario')->count(); //Egresados que no ha contestado al formulario

        $egresadosSelc = Egresado::where('anio_egreso', $muestra->anio)
            ->where('form_hecho', 0)
            ->orderByRaw('RAND()')
            ->limit((int)$total)
            ->get();
        
        $lista_control = collect([]);
        foreach ($egresadosSelc as $egresado) {
            $lista_control->push($egresado->no_control_egresado);
        }

        /**
         * Actualizar los egresados viejos por los nuevos.
         * Condiciones de actualizar:
         * 1. No deben de haber constestado el formulario;
         * 2. No deben de tener un no. control igual a alguno de los seleccionados; -> se evita duplicar registros (esto dependerá del no. de egresados existentes)
         */
        foreach ($egresadosSelc as $es) {
            $afectado = MuestraEgresado::where('id_muestra', $muestra->id)
                ->whereNull('formulario')
                ->whereNotIn('no_control', $lista_control)
                ->update(['no_control' => $es->no_control_egresado]);
        }

        $registrar_update = Muestra::where('id', $muestra->id)->update(['total_selec' => $muestra->total_selec]);

        /**
         * Se crean los nuevos usuarios
         */

        foreach ($lista_control as $egresado) {

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

        return back()->with('success', 'Se ha actualizado la muestra y enviado los correos exitosamente.');
    }

}
