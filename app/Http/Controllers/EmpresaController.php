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
        $empresa_mail = Auth::user()->email;

        $mensajes = [
            'required' => 'Este campo es obligatorio.',
            'required_if' => 'El campo es obligatorio si seleccionó :value.',
            'same'    => 'The :attribute and :other must match.',
            'size'    => 'El campo :attribute debe ser de :size.',
            'between' => 'El :input debe de ser de :max.',
            'in'      => 'Este campo debe ser uno de los siguientes types: :values',
            'max'      => 'Este campo debe tener máximo :max caracteres.',
            'min'      => 'Este campo debe tener mínimo :min caracteres.',
            'email:rfc,dns'      => 'El e-mail no es válido.',
        ];
        
        //validaciones
        $reglas = [
            'nombre' => 'required|max:255',
            'domicilio' => 'required|max:255',
            'ciudad' => 'required|max:255',
            'municipio' => 'required|max:255',
            'estado' => 'required|max:255',
            'telefono' => 'between:10,10',
            'actividad_economicaotra' => 'required_if:actividad_economica,Otra|max:255',
        ];

        $validar = Validator::make($request->all(), $reglas, $mensajes);

        if($validar->fails()){
            return back()->withErrors($validar)->withInput(); //si hay fallos, se regresa al formulario con los errores
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
            'required' => 'Seleccione al menos una opción.',
            'required_if' => 'El campo es obligatorio si seleccionó Otro.',
            'required_without' => 'Seleccione al menos una opción.',
            'same'    => 'The :attribute and :other must match.',
            'size'    => 'El campo :attribute debe ser de :size.',
            'between' => 'El valor :input de :attribute no está entre :min - :max.',
            'in'      => 'Este campo debe ser uno de los siguientes types: :values',
            'max'      => 'Este campo debe tener máximo :max caracteres.',
            'min'      => 'Este campo debe tener mínimo :min caracteres.',
            'email:rfc,dns'      => 'El e-mail no es válido.',
        ];
        
        //validaciones
        $reglas = [
            'mandootra1' => 'required_if:mando1,Otra',
            'mandootra2' => 'required_if:mando2,Otra',
            'mandootra3' => 'required_if:mando3,Otra',
            'mandootra4' => 'required_if:mando4,Otra',
            'mandootra5' => 'required_if:mando5,Otra',
            'mandootra6' => 'required_if:mando6,Otra',
            'mandootra7' => 'required_if:mando7,Otra',
            'mandootra8' => 'required_if:mando8,Otra',
            'mandootra9' => 'required_if:mando9,Otra',
            'mandootra10' => 'required_if:mando10,Otra',
            'requisitos' => 'required_without:requisitostexto',
            'requisitostexto' => 'max:255',
            'carreras' => 'required',
        ];

        $validar = Validator::make($request->all(), $reglas, $mensajes);
        //dd($request->all(), $validar->errors());
        if($validar->fails()){
            return back()->withErrors($validar)->withInput(); //si hay fallos, se regresa al formulario con los errores
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
            'required' => 'Este campo es obligatorio.',
            'required_if' => 'El campo es obligatorio si seleccionó :value.',
            'same'    => 'The :attribute and :other must match.',
            'size'    => 'El campo :attribute debe ser de :size.',
            'between' => 'El valor :input de :attribute no está entre :min - :max.',
            'in'      => 'Este campo debe ser uno de los siguientes types: :values',
            'max'      => 'Este campo debe tener máximo :max caracteres.',
            'min'      => 'Este campo debe tener mínimo :min caracteres.',
            'email:rfc,dns'      => 'El e-mail no es válido.',
        ];
        
        //validaciones
        $reglas = [
            'otra_competencia' => 'max:255',
            'sugerencias_instituto' => 'max:60000',
            'comentarios_sugerencias' => 'max:60000',
        ];

        $validar = Validator::make($request->all(), $reglas, $mensajes);

        if($validar->fails()){
            return back()->withErrors($validar)->withInput(); //si hay fallos, se regresa al formulario con los errores
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
