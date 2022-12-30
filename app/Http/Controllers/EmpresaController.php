<?php

namespace App\Http\Controllers;

use App\Models\CarrerasEmpresa;
use App\Models\Egresado;
use App\Models\EgresadosJerarquia;
use App\Models\Empresa;
use App\Models\FormularioEmpresa;
use App\Models\Modulo3Egresado;
use App\Models\ModuloAEmpresa;
use App\Models\ModuloBEmpresa;
use App\Models\ModuloCEmpresa;
use App\Models\RequisitosEmpresa;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Throwable;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Carbon::setLocale('es');
        $fecha_actual = Carbon::now();
        $fecha_actual->diffForHumans();

        $empresa_mail = Auth::user()->email;

        $datos_egresado = Modulo3Egresado::where('email', $empresa_mail)->first();

        $existe = ModuloAEmpresa::where('email_empresa', $empresa_mail)->first();
        if($existe){
            $existe = ModuloBEmpresa::where('email_empresa', $empresa_mail)->first();
            if($existe){
                $existe = ModuloCEmpresa::where('email_empresa', $empresa_mail)->first();
                if($existe){
                    $modulo = 'd';
                }else{
                    $modulo = 'c';
                }
            }else{
                $modulo = 'b';
            }
        }else{
            $modulo = 'a';
        }

        return view('empresas.form', compact('modulo', 'fecha_actual', 'datos_egresado'));
    }

    public function moduloa(Request $request)
    {
        ////return $request;
        //$egresado = Egresado::where('email', Auth::user()->email)->first();
        $empresa_mail = Auth::user()->email;

        $mensajes = [
            'required' => 'El campo :attribute es obligatorio.',
            'same'    => 'The :attribute and :other must match.',
            'size'    => 'El campo :attribute debe ser de :size.',
            'between' => 'The :attribute value :input is not between :min - :max.',
            'in'      => 'The :attribute must be one of the following types: :values',
            'min'      => 'El campo :attribute debe tener al menos :min caracteres.',
            'max'      => 'El campo :attribute debe tener maximo :max caracteres.',
        ];
        
        //validaciones
        $reglas = [
            'nombre' => 'required',
        ];

        $validar = Validator::make($request->all(), $reglas, $mensajes);

        if($validar->fails()){
            return back()->withErrors($validar); //si hay fallos, se regresa al formulario con los errores
        }

        $modulo = new ModuloAEmpresa();
        $modulo->email_empresa = $empresa_mail;
        $modulo->nombre = $request->nombre;
        $modulo->domicilio = $request->domicilio;
        $modulo->ciudad = $request->ciudad;
        $modulo->municipio = $request->municipio;
        $modulo->estado = $request->estado;
        $modulo->telefono = $request->telefono;
        $modulo->organismo = $request->organismo;
        $modulo->tamanio_empresa = $request->tamanio_empresa;
        
        if($request->actividad_economica == 'Otra' && $request->actividad_economicaotra){
            $modulo->actividad_economica = $request->actividad_economica.': '.$request->actividad_economicaotra;
        } else{
            $modulo->actividad_economica = $request->actividad_economica;
        }

        $modulo->save();

        //se actualiza el registro de formulario, agregando el nuevo modulo registrado
        $existe = FormularioEmpresa::where('email_empresa', $empresa_mail)->first();

        if($existe){
            $afectado = FormularioEmpresa::where('email_empresa', $empresa_mail)
                ->update(['modulo_a' => $modulo->id]);
        }else{
            $formulario = new FormularioEmpresa();
            $formulario->email_empresa = $empresa_mail;
            $formulario->modulo_a = $modulo->id;
            $formulario->save();
        }

        return back();
    }

    public function modulob(Request $request)
    {
        //dd($request->all());

        //$egresado = Egresado::where('email', Auth::user()->email)->first();
        $empresa_mail = Auth::user()->email;

        $mensajes = [
            'required' => 'El campo :attribute es obligatorio.',
            'same'    => 'The :attribute and :other must match.',
            'size'    => 'El campo :attribute debe ser de :size.',
            'between' => 'The :attribute value :input is not between :min - :max.',
            'in'      => 'The :attribute must be one of the following types: :values',
            'min'      => 'El campo :attribute debe tener al menos :min caracteres.',
            'max'      => 'El campo :attribute debe tener maximo :max caracteres.',
        ];
        
        //validaciones
        $reglas = [
            'no_profesionistas' => 'required',
        ];

        $validar = Validator::make($request->all(), $reglas, $mensajes);

        if($validar->fails()){
            return back()->withErrors($validar); //si hay fallos, se regresa al formulario con los errores
        }

        $modulo = new ModuloBEmpresa();
        $modulo->email_empresa = $empresa_mail;

        $modulo->no_profesionistas = $request->no_profesionistas;
        $modulo->funcion_prefil = $request->funcion_prefil;

        $modulo->save();

        //se guardan las carreras con su jerarquia, tomando en cuenta que el usuario debió ingresar una cantidad
        if($request->cantidad1){
            $jerarquia = new EgresadosJerarquia();
            $jerarquia->email_empresa = $empresa_mail;
            $jerarquia->carreras = 'Ingeniería Industrial';
            $jerarquia->cantidad = $request->cantidad1;
            $jerarquia->mando = $request->mando1;
            $jerarquia->save();
        }
        
        if($request->cantidad2){
            $jerarquia = new EgresadosJerarquia();
            $jerarquia->email_empresa = $empresa_mail;
            $jerarquia->carreras = 'Ingeniería en Gestión Empresarial';
            $jerarquia->cantidad = $request->cantidad2;
            $jerarquia->mando = $request->mando2;
            $jerarquia->save();
        }
        
        if($request->cantidad3){
            $jerarquia = new EgresadosJerarquia();
            $jerarquia->email_empresa = $empresa_mail;
            $jerarquia->carreras = 'Ingeniería en Sistemas Computacionales';
            $jerarquia->cantidad = $request->cantidad3;
            $jerarquia->mando = $request->mando3;
            $jerarquia->save();
        }
        
        if($request->cantidad4){
            $jerarquia = new EgresadosJerarquia();
            $jerarquia->email_empresa = $empresa_mail;
            $jerarquia->carreras = 'Ingeniería en Electrónica';
            $jerarquia->cantidad = $request->cantidad4;
            $jerarquia->mando = $request->mando4;
            $jerarquia->save();
        }
        
        if($request->cantidad5){
            $jerarquia = new EgresadosJerarquia();
            $jerarquia->email_empresa = $empresa_mail;
            $jerarquia->carreras = 'Licenciatura en Gastronomía';
            $jerarquia->cantidad = $request->cantidad5;
            $jerarquia->mando = $request->mando5;
            $jerarquia->save();
        }
        
        if($request->cantidad6){
            $jerarquia = new EgresadosJerarquia();
            $jerarquia->email_empresa = $empresa_mail;
            $jerarquia->carreras = 'Ingeniería Electromecánica';
            $jerarquia->cantidad = $request->cantidad6;
            $jerarquia->mando = $request->mando6;
            $jerarquia->save();
        }
        
        if($request->cantidad7){
            $jerarquia = new EgresadosJerarquia();
            $jerarquia->email_empresa = $empresa_mail;
            $jerarquia->carreras = 'Ingeniería en Industrias Alimentarias';
            $jerarquia->cantidad = $request->cantidad7;
            $jerarquia->mando = $request->mando7;
            $jerarquia->save();
        }
        
        if($request->cantidad8){
            $jerarquia = new EgresadosJerarquia();
            $jerarquia->email_empresa = $empresa_mail;
            $jerarquia->carreras = 'Ingeniería Bioquímica';
            $jerarquia->cantidad = $request->cantidad8;
            $jerarquia->mando = $request->mando8;
            $jerarquia->save();
        }
        
        if($request->cantidad9){
            $jerarquia = new EgresadosJerarquia();
            $jerarquia->email_empresa = $empresa_mail;
            $jerarquia->carreras = 'Ingeniería Mecatrónica';
            $jerarquia->cantidad = $request->cantidad9;
            $jerarquia->mando = $request->mando9;
            $jerarquia->save();
        }
        
        if($request->cantidad10){
            $jerarquia = new EgresadosJerarquia();
            $jerarquia->email_empresa = $empresa_mail;
            $jerarquia->carreras = 'Ingeniería Civil';
            $jerarquia->cantidad = $request->cantidad10;
            $jerarquia->mando = $request->mando10;
            $jerarquia->save();
        }

        //se guardan los requisitos marcados en los checkbox
        if($request->requisitos){
            foreach ($request->requisitos as $requisito) {
                $requisitoEmpresa = new RequisitosEmpresa();
                $requisitoEmpresa->email_empresa = $empresa_mail;
                $requisitoEmpresa->requisito = $requisito;
                $requisitoEmpresa->save();
            }
        }

        if($request->requisitostexto){
            $requisitoEmpresa = new RequisitosEmpresa();
            $requisitoEmpresa->email_empresa = $empresa_mail;
            $requisitoEmpresa->requisito = $request->requisitostexto;
            $requisitoEmpresa->save();
        }

        //se guardan las carreras marcadas en los checkbox
        if($request->carreras){
            foreach ($request->carreras as $carrera) {
                $carreraEmpresa = new CarrerasEmpresa();
                $carreraEmpresa->email_empresa = $empresa_mail;
                $carreraEmpresa->carrera = $carrera;
                $carreraEmpresa->save();
            }
        }

        //se actualiza el registro de formulario, agregando el nuevo modulo registrado
        $existe = FormularioEmpresa::where('email_empresa', $empresa_mail)->first();

        if($existe){
            $afectado = FormularioEmpresa::where('email_empresa', $empresa_mail)
                ->update(['modulo_b' => $modulo->id]);
        }else{
            $formulario = new FormularioEmpresa();
            $formulario->email_empresa = $empresa_mail;
            $formulario->modulo_b = $modulo->id;
            $formulario->save();
        }

        return back();
    }

    public function moduloc(Request $request)
    {
        //dd($request->all());
        //$egresado = Egresado::where('email', Auth::user()->email)->first();
        $empresa_mail = Auth::user()->email;

        $mensajes = [
            'required' => 'El campo :attribute es obligatorio.',
            'same'    => 'The :attribute and :other must match.',
            'size'    => 'El campo :attribute debe ser de :size.',
            'between' => 'The :attribute value :input is not between :min - :max.',
            'in'      => 'The :attribute must be one of the following types: :values',
            'min'      => 'El campo :attribute debe tener al menos :min caracteres.',
            'max'      => 'El campo :attribute debe tener maximo :max caracteres.',
        ];
        
        //validaciones
        $reglas = [
            'sugerencias_instituto' => 'max:60000',
        ];

        $validar = Validator::make($request->all(), $reglas, $mensajes);

        if($validar->fails()){
            return back()->withErrors($validar); //si hay fallos, se regresa al formulario con los errores
        }

        //sin fallos...continua con el registro del modulo
        
        $modulo = new ModuloCEmpresa();
        $modulo->email_empresa = $empresa_mail;
        $modulo->resolver_conflictos = $request->resolver_conflictos;
        $modulo->ortografia = $request->ortografia;
        $modulo->mejora_procesos = $request->mejora_procesos;
        $modulo->trabajo_equipo = $request->trabajo_equipo;
        $modulo->administrar_tiempo = $request->administrar_tiempo;
        $modulo->seguridad_personal = $request->seguridad_personal;
        $modulo->facilidad_palabra = $request->facilidad_palabra;
        $modulo->gestion_proyectos = $request->gestion_proyectos;
        $modulo->puntualidad = $request->puntualidad;
        $modulo->cumplimiento_normas = $request->cumplimiento_normas;
        $modulo->integracion_trabajo = $request->integracion_trabajo;
        $modulo->innovacion = $request->innovacion;
        $modulo->negociacion = $request->negociacion;
        $modulo->analisis = $request->analisis;
        $modulo->liderazgo = $request->liderazgo;
        $modulo->adaptacion = $request->adaptacion;
        
        if($request->otra_competencia){
            $modulo->otras = $request->otra_competencia.': '.$request->otras;
        }

        $modulo->desempeño_laboral = $request->desempeño_laboral;

        if($request->sugerencias_instituto){
            $modulo->sugerencias_instituto = $request->sugerencias_instituto;
        }

        if($request->comentarios_sugerencias){
            $modulo->comentarios_sugerencias = $request->comentarios_sugerencias;
        }

        $modulo->save();

        //se actualiza el registro de formulario, agregando el nuevo modulo registrado
        $existe = FormularioEmpresa::where('email_empresa', $empresa_mail)->first();

        if($existe){
            $afectado = FormularioEmpresa::where('email_empresa', $empresa_mail)
                ->update(['modulo_c' => $modulo->id]);

            //se marca a la empresa con 1 en estado, significando que finalizó por completo el formulario
            $afectado = Empresa::where('email', $empresa_mail)
                ->update(['estado' => 1]);
        }else{
            $formulario = new FormularioEmpresa();
            $formulario->email_empresa = $empresa_mail;
            $formulario->modulo_c = $modulo->id;
            $formulario->save();

            //se marca a la empresa con 1 en estado, significando que finalizó por completo el formulario
            $afectado = Empresa::where('email', $empresa_mail)
                ->update(['estado' => 1]);
        }

        return back();
    }

}
