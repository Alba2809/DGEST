<?php

namespace App\Http\Controllers;

use App\Charts\MuestraChart;
use App\Exports\Modulo1Export;
use App\Mail\EgresadosMailable;
use App\Models\Egresado;
use App\Models\Empresa;
use App\Models\Jefe;
use App\Models\Modulo1Egresado;
use App\Models\Modulo2Egresado;
use App\Models\Modulo3Egresado;
use App\Models\Modulo4Egresado;
use App\Models\Modulo5Egresado;
use App\Models\Modulo6Egresado;
use App\Models\ModuloAEmpresa;
use App\Models\ModuloBEmpresa;
use App\Models\ModuloCEmpresa;
use App\Models\Muestra;
use App\Models\MuestraEgresado;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use PhpParser\Node\Expr\Array_;

class MuestraController extends Controller
{
    public function index()
    {
        $jefe = Jefe::where('email', Auth::user()->email)->first();
        
        $muestras = Muestra::where('carrera', $jefe->carrera)->get();

        return view('muestras.index', compact('muestras', 'jefe'));
    }

    public function show(Muestra $muestra)
    {
        $jefe = Jefe::where('email', Auth::user()->email)->first();
        $disponibles = Muestra::where('carrera', $jefe->carrera)->get();

        if(!$disponibles->contains('id', $muestra->id)){
            abort(404);
        }

        $egresados = MuestraEgresado::select('muestras_egresados.*', 'egresados.form_hecho')
            ->join('egresados','muestras_egresados.no_control','=','egresados.no_control_egresado')
            ->where('id_muestra', $muestra->id)
            ->distinct()
            ->get();
        
        $respuestas = MuestraEgresado::where('id_muestra', $muestra->id)->whereNotNull('formulario')->count();

        //porc_selec = No. Egresados Seleccionados
        //    X      = $respuestas

        $porc_obtenido = ($muestra->porc_selec * $respuestas) / $muestra->total_selec;

        //tiempo transcurrido
        $fecha_inicial = Carbon::createFromFormat('Y-m-d', $muestra->created_at->format('Y-m-d'));
        $fecha_actual = Carbon::createFromFormat('Y-m-d', Carbon::now()->format('Y-m-d'));

        $dias_transcurridos = $fecha_actual->diffInDays($fecha_inicial);

        $total = Egresado::where('anio_egreso', $muestra->anio)->where('carrera', $jefe->carrera)->count();
        
        /* 
            Apartado de graficas generales de progreso de egresados y emrpesas
        */
        //grafica de progreso de egresados
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

        $progreso_egresados = new MuestraChart;
        $progreso_egresados->labels(['Finalizados', 'Sin empezar', 'En proceso']);
        $progreso_egresados->dataset('', 'pie', [$finalizados, $sinempezar, $proceso])->backgroundColor(['green', 'red', 'yellow']);
        $progreso_egresados->title('Progreso de egresados ('.$egresados->count().')');
        $progreso_egresados->displayAxes(false);

        //grafica de progreso de empresas
        foreach ($egresados as $egresado) {
            $egresados_control[] = $egresado->no_control;
        }
        $empresa_emails = Modulo3Egresado::select('email')
            ->whereIn('no_control_egresado', $egresados_control)->get();

        $empresas = Empresa::whereIn('email', $empresa_emails)->get();

        $empresa_terminados = 0;
        $empresa_proceso = 0;
        $empresa_sin_empezar = 0;
        foreach ($empresas as $empresa) {
            if ($empresa->estado == 1)
                $empresa_terminados++;
            else{
                $existeA = ModuloAEmpresa::where('email_empresa', $empresa->email)
                    ->first();
                $existeB = ModuloBEmpresa::where('email_empresa', $empresa->email)
                    ->first();
                $existeC = ModuloCEmpresa::where('email_empresa', $empresa->email)
                    ->first();
                if ($existeA || $existeB || $existeC)
                    $empresa_proceso++;
                else
                    $empresa_sin_empezar++;
            }
        }

        $progreso_empresas = new MuestraChart;
        $progreso_empresas->labels(['Finalizados', 'Sin empezar', 'En proceso']);
        $progreso_empresas->dataset('', 'pie', [$empresa_terminados, $empresa_sin_empezar, $empresa_proceso])->backgroundColor(['green', 'red', 'yellow']);
        $progreso_empresas->title('Progreso de empresas ('.$empresas->count().')');
        $progreso_empresas->displayAxes(false);

        /* 
            Apartado de graficas que pertenecen a los egresados - Esto solo se ejecutará si hay
            por lo menos un formulario TERMINADO para ambos casos
        */
        /*
            Egresados
        */
        $egresado_charts = collect();
        if($finalizados){
            //grafica de hombre/mujeres
            /* $mujeres = Egresado::where('no_control_egresado', $egresados_control)
                ->where('sexo', 1)
                ->count();
            $hombres = Egresado::where('no_control_egresado', $egresados_control)
                ->where('sexo', 0)
                ->count();

            $egresado_sexo = new MuestraChart;
            $egresado_sexo->labels(['Hombres', 'Mujeres']);
            $egresado_sexo->dataset('', 'pie', [$hombres, $mujeres])->backgroundColor(['green', 'red', 'yellow']);
            $egresado_sexo->title('Porcentaje por sexo');
            $egresado_sexo->displayAxes(false);
            $egresado_charts->push($egresado_sexo);
 */
            //gráfica de titulados
            $consulta = Modulo1Egresado::select('titulado', DB::raw('count(titulado) as total'))
                ->whereIn('no_control_egresado', $egresados_control)
                ->groupBy('titulado')
                ->pluck('total', 'titulado')->all();
            for ($i=0; $i<=count($consulta); $i++) {
                $colores = [];
                $colores[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
            }

            $egresado_titulo = new MuestraChart;
            $egresado_titulo->labels(array_keys($consulta));
            $egresado_titulo->dataset('', 'pie', array_values($consulta))->backgroundColor($colores);
            $egresado_titulo->title('Titulados');
            $egresado_titulo->displayAxes(false);
            $egresado_charts->push($egresado_titulo);
            
            //Modulo1-Ingles
            $grupos = Modulo1Egresado::select('ingles_dominio', DB::raw('count(ingles_dominio) as total'))
                ->whereIn('no_control_egresado', $egresados_control)
                ->groupBy('ingles_dominio')
                ->pluck('total', 'ingles_dominio')->all();
            
            for ($i=0; $i<=count($grupos); $i++) {
                $colores = [];
                $colores[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
            }

            $egresado_ingles = new MuestraChart;
            $egresado_ingles->labels(array_keys($grupos));
            $egresado_ingles->dataset('(%)', 'pie', array_values($grupos))->backgroundColor($colores);
            $egresado_ingles->title('Dominio de ingles');
            $egresado_ingles->displayAxes(false);
            $egresado_charts->push($egresado_ingles);

            //calidades_modulo2
            $docentes = Modulo2Egresado::select('calidad_docentes', DB::raw('count(calidad_docentes) as total'))
                ->whereIn('no_control_egresado', $egresados_control)
                ->groupBy('calidad_docentes')
                ->pluck('total', 'calidad_docentes')->all();
            for ($i=0; $i<=count($docentes); $i++) {
                $colores = [];
                $colores[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
            }
            
            $egresado_pertinencia = new MuestraChart;
            $egresado_pertinencia->labels(array_keys($docentes));
            $egresado_pertinencia->dataset('Docentes', 'bar', array_values($docentes))->backgroundColor($colores);
            $egresado_pertinencia->title('Calidad de recursos de aprendizaje');
            $egresado_charts->push($egresado_pertinencia);

            //
            /* $plan = Modulo2Egresado::select('plan_estudios', DB::raw('count(plan_estudios) as total'))
                ->whereIn('no_control_egresado', $egresados_control)
                ->groupBy('plan_estudios')
                ->pluck('total', 'plan_estudios')->all();
            for ($i=0; $i<=count($plan); $i++) {
                $colores = [];
                $colores[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
            }
            $egresado_pertinencia = new MuestraChart;
            $egresado_pertinencia->labels(array_keys($plan));
            $egresado_pertinencia->dataset('Plan', 'bar', array_values($plan))->backgroundColor($colores);
            $egresado_pertinencia->title('Calidad de recursos de aprendizaje');
            $egresado_charts->push($egresado_pertinencia);
            
            //
            $proyecto = Modulo2Egresado::select('part_proyectos', DB::raw('count(part_proyectos) as total'))
                ->whereIn('no_control_egresado', $egresados_control)
                ->groupBy('part_proyectos')
                ->pluck('total', 'part_proyectos')->all();
            for ($i=0; $i<=count($proyecto); $i++) {
                $colores = [];
                $colores[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
            }
            $egresado_pertinencia = new MuestraChart;
            $egresado_pertinencia->labels(array_keys($proyecto));
            $egresado_pertinencia->dataset('Participación en proyectos', 'bar', array_values($proyecto))->backgroundColor($colores);
            $egresado_pertinencia->title('Calidad de recursos de aprendizaje');
            $egresado_charts->push($egresado_pertinencia); */
            
            //modulo 3 - Actividad
            $consulta = Modulo3Egresado::select('actividad', DB::raw('count(actividad) as total'))
                ->whereIn('no_control_egresado', $egresados_control)
                ->groupBy('actividad')
                ->pluck('total', 'actividad')->all();
            for ($i=0; $i<=count($consulta); $i++) {
                $colores = [];
                $colores[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
            }
            $egresado_act = new MuestraChart;
            $egresado_act->labels(array_keys($consulta));
            $egresado_act->dataset('', 'pie', array_values($consulta))->backgroundColor($colores);
            $egresado_act->title('Actividad a la que se dedica');
            $egresado_act->displayAxes(false);
            $egresado_charts->push($egresado_act);
            
            //modulo 4 - residencias
            $consulta = Modulo4Egresado::select('utilidad_residencias', DB::raw('count(utilidad_residencias) as total'))
                ->whereIn('no_control_egresado', $egresados_control)
                ->groupBy('utilidad_residencias')
                ->pluck('total', 'utilidad_residencias')->all();
            for ($i=0; $i<=count($consulta); $i++) {
                $colores = [];
                $colores[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
            }
            $egresado_res = new MuestraChart;
            $egresado_res->labels(array_keys($consulta));
            $egresado_res->dataset('', 'pie', array_values($consulta))->backgroundColor($colores);
            $egresado_res->title('Utilidad de residencias');
            $egresado_res->displayAxes(false);
            $egresado_charts->push($egresado_res);
            
            //modulo 3 - formacion
            $consulta = Modulo4Egresado::select('formacion_academica', DB::raw('count(formacion_academica) as total'))
                ->whereIn('no_control_egresado', $egresados_control)
                ->groupBy('formacion_academica')
                ->pluck('total', 'formacion_academica')->all();
            for ($i=0; $i<=count($consulta); $i++) {
                $colores = [];
                $colores[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
            }
            $egresado_form = new MuestraChart;
            $egresado_form->labels(array_keys($consulta));
            $egresado_form->dataset('', 'pie', array_values($consulta))->backgroundColor($colores);
            $egresado_form->title('Formación académica respecto al desempeño laboral');
            $egresado_form->displayAxes(false);
            $egresado_charts->push($egresado_form);
        }

        $empresa_charts = collect();
        if($empresa_terminados){

            //modulo A - Tamaño
            $consulta = ModuloAEmpresa::select('tamanio_empresa', DB::raw('count(tamanio_empresa) as total'))
                ->whereIn('email_empresa', $empresa_emails)
                ->groupBy('tamanio_empresa')
                ->pluck('total', 'tamanio_empresa')->all();
            for ($i=0; $i<=count($consulta); $i++) {
                $colores = [];
                $colores[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
            }
            $empresa_tam = new MuestraChart;
            $empresa_tam->labels(array_keys($consulta));
            $empresa_tam->dataset('', 'bar', array_values($consulta))->backgroundColor($colores);
            $empresa_tam->title('Formación académica respecto al desempeño laboral');
            $empresa_charts->push($empresa_tam);

            //modulo A - organismo
            $consulta = ModuloAEmpresa::select('organismo', DB::raw('count(organismo) as total'))
                ->whereIn('email_empresa', $empresa_emails)
                ->groupBy('organismo')
                ->pluck('total', 'organismo')->all();
            for ($i=0; $i<=count($consulta); $i++) {
                $colores = [];
                $colores[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
            }
            $empresa_org = new MuestraChart;
            $empresa_org->labels(array_keys($consulta));
            $empresa_org->dataset('', 'bar', array_values($consulta))->backgroundColor($colores);
            $empresa_org->title('Tipo de organismo o empresa');
            $empresa_charts->push($empresa_org);

            //modulo A - actividad_economica
            $consulta = ModuloBEmpresa::select('no_profesionistas', DB::raw('count(no_profesionistas) as total'))
                ->whereIn('email_empresa', $empresa_emails)
                ->groupBy('no_profesionistas')
                ->pluck('total', 'no_profesionistas')->all();
            for ($i=0; $i<=count($consulta); $i++) {
                $colores = [];
                $colores[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
            }
            $empresa_eco = new MuestraChart;
            $empresa_eco->labels(array_keys($consulta));
            $empresa_eco->dataset('', 'bar', array_values($consulta))->backgroundColor($colores);
            $empresa_eco->title('Número de profesionista de la empresa');
            $empresa_charts->push($empresa_eco);
        }


        return view('muestras.detalles', 
            compact('muestra', 'egresados', 'porc_obtenido', 'dias_transcurridos', 'total', 
            'finalizados', 'empresa_terminados', 'progreso_egresados', 'progreso_empresas',
            'egresado_charts', 'empresa_charts'
        ));
    }

    public function edit(Muestra $muestra)
    {

        /**
         * Se borran los usuarios de los egresados viejos.
         */
        $jefe = Jefe::where('email', Auth::user()->email)->first();
        $egresados_viejos = MuestraEgresado::where('id_muestra', $muestra->id)->whereNull('formulario')->get(); //Egresados que no ha contestado al formulario
        
        $lista_noControl = collect([]);
        foreach ($egresados_viejos as $egresado) {
            $lista_noControl->push($egresado->no_control);
        }

        $emails_viejos = Egresado::whereIn('no_control_egresado', $lista_noControl)
            ->where('carrera', $jefe->carrera)
            ->get();
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
            ->where('carrera', $jefe->carrera)
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

    //fase prueba
    public function imprimir(Request $request){
        $egresados = MuestraEgresado::select('no_control')
            ->where('id_muestra', $request->muestra)->get();
        //dd(array_values($egresados->toArray())->no_control);
        return (new Modulo1Export($egresados))->download('modulo1.xlsx');
    }
}
