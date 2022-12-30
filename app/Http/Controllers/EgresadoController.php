<?php

namespace App\Http\Controllers;

use App\Mail\EmpresaMailable;
use App\Models\Egresado;
use App\Models\Empresa;
use App\Models\FormularioEgresado;
use App\Models\Modulo1Egresado;
use App\Models\Modulo2Egresado;
use App\Models\Modulo3Egresado;
use App\Models\Modulo4Egresado;
use App\Models\Modulo5Egresado;
use App\Models\Modulo6Egresado;
use App\Models\Modulo7Egresado;
use App\Models\MuestraEgresado;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class EgresadoController extends Controller
{
    public function index()
    {
        $egresado = Egresado::where('email', Auth::user()->email)->first();

        $modulo = 1;

        if ($egresado->form_hecho != 0) { //si existe un formulario registrado al egresado significa que ya contestó mínimo el primer modulo
            
            $formulario = FormularioEgresado::where('no_control_egresado', $egresado->no_control_egresado)->first();

            if ($formulario->modulo_1) {

                if ($formulario->modulo_2) {

                    if ($formulario->modulo_3) {

                        if ($formulario->modulo_4) {

                            if ($formulario->modulo_5) {

                                if ($formulario->modulo_6) {

                                    if ($formulario->modulo_7) {
                                        $modulo = 8;
                                    } else {
                                        $modulo = 7;
                                    }

                                } else {
                                    $modulo = 6;
                                }
                                
                            } else {
                                $modulo = 5;
                            }
                            
                        } else {
                            $modulo = 4;
                        }
                        
                    } else {
                        $modulo = 3;
                    }
                    
                } else {
                    $modulo = 2;
                }
                
            } else {
                $modulo = 1;
            }
            
        }

        return view('egresados.form', compact('egresado', 'modulo'));
    }

    public function modulo1(Request $request)
    {
        
        $egresado = Egresado::where('email', Auth::user()->email)->first();

        $mensajes = [
            'required' => 'El campo :attribute es obligatorio.',
            'same'    => 'The :attribute and :other must match.',
            'size'    => 'El campo :attribute debe ser de :size.',
            'between' => 'The :attribute value :input is not between :min - :max.',
            'in'      => 'The :attribute must be one of the following types: :values',
        ];
        
        $reglas = [
            'Domicilio' => 'required|max:255',
        ];

        $validar = Validator::make($request->all(), $reglas, $mensajes);

        if($validar->fails()){
            return back()->withErrors($validar);
        }

        //Si no hubo errores se continua con el registro del modulo
        $modulo = new Modulo1Egresado();
        $modulo->no_control_egresado = $egresado->no_control_egresado;
        $modulo->estado_civil = $request->EstadoCivil;
        $modulo->domicilio = $request->Domicilio;
        $modulo->ciudad = $request->Ciudad;
        $modulo->municipio = $request->Municipio;
        $modulo->estado = $request->Estado;
        $modulo->telefono = $request->Telefono;
        $modulo->tel_casa = $request->TelefonoCasa;
        $modulo->lenguaje_ext = 'Ingles: '.$request->IdiomaIngles.' '.$request->IdiomaOtro;
        $modulo->titulado = $request->Titulado;
        $modulo->manejo_paquetes = $request->ManejoPaquetes;

        $modulo->save();

        $existe = FormularioEgresado::where('no_control_egresado', $egresado->no_control_egresado)->first();

        if($existe){
            $afectado = FormularioEgresado::where('no_control_egresado', $egresado->no_control_egresado)
            ->update(['modulo_1' => $modulo->id]);
        }else{
            $formulario = new FormularioEgresado();
            $formulario->no_control_egresado = $egresado->no_control_egresado;
            $formulario->modulo_1 = $modulo->id;
            $formulario->save();

            $afectado = $egresado = Egresado::where('email', Auth::user()->email)
                ->update(['form_hecho' => 1]);
        }

        return back();
    }

    public function modulo2(Request $request)
    {
        $egresado = Egresado::where('email', Auth::user()->email)->first();

        $mensajes = [
            'required' => 'El campo :attribute es obligatorio.',
            'same'    => 'The :attribute and :other must match.',
            'size'    => 'El campo :attribute debe ser de :size.',
            'between' => 'The :attribute value :input is not between :min - :max.',
            'in'      => 'The :attribute must be one of the following types: :values',
        ];
        
        $reglas = [
            'calidad_docentes' => 'required',
            'plan_estudios' => 'required',
            'part_proyectos' => 'required',
            'enfasis_investigacion' => 'required',
            'satisfaccion_cond' => 'required',
            'experiencia_residencia' => 'required',
        ];

        $validar = Validator::make($request->all(), $reglas, $mensajes);

        if($validar->fails()){
            return back()->withErrors($validar);
        }

        //Si no hubo errores se continua con el registro del modulo
        $modulo = new Modulo2Egresado();
        $modulo->no_control_egresado = $egresado->no_control_egresado;
        $modulo->calidad_docentes = $request->calidad_docentes;
        $modulo->plan_estudios = $request->plan_estudios;
        $modulo->part_proyectos = $request->part_proyectos;
        $modulo->enfasis_investigacion = $request->enfasis_investigacion;
        $modulo->satisfaccion_cond = $request->satisfaccion_cond;
        $modulo->experiencia_residencia = $request->experiencia_residencia;

        $modulo->save();

        $existe = FormularioEgresado::where('no_control_egresado', $egresado->no_control_egresado)->first();

        if($existe){
            $afectado = FormularioEgresado::where('no_control_egresado', $egresado->no_control_egresado)
            ->update(['modulo_2' => $modulo->id]);
        }else{
            $formulario = new FormularioEgresado();
            $formulario->no_control_egresado = $egresado->no_control_egresado;
            $formulario->modulo_2 = $modulo->id;
            $formulario->save();

            $afectado = $egresado = Egresado::where('email', Auth::user()->email)
                ->update(['form_hecho' => 1]);
        }

        return back();

    }

    public function modulo3(Request $request)
    {
        $egresado = Egresado::where('email', Auth::user()->email)->first();

        $mensajes = [
            'required' => 'El campo :attribute es obligatorio.',
            'same'    => 'The :attribute and :other must match.',
            'size'    => 'El campo :attribute debe ser de :size.',
            'between' => 'The :attribute value :input is not between :min - :max.',
            'in'      => 'The :attribute must be one of the following types: :values',
        ];
        
        $reglas = [
            'actividad' => 'required',
        ];

        $validar = Validator::make($request->all(), $reglas, $mensajes);

        if($validar->fails()){
            return back()->withErrors($validar);
        }

        //se seleccionó alguna opción de la primera pregunta
        $modulo = new Modulo3Egresado();
        $modulo->no_control_egresado = $egresado->no_control_egresado;
        $modulo->actividad = $request->actividad;
        /* if($request->actividad == 'No estudia ni trabaja'){
        } */
        if ($request->actividad == 'Estudia' || $request->actividad == 'Estudia y Trabaja') {
            $modulo->estudia = $request->estudia;
            
            if($request->estudia == 'Otra'){
                $modulo->estudia = $request->estudia.': '.$request->OtraTexto;
            } else { $modulo->estudia = $request->estudia; }
            
            $modulo->especialidad_inst = $request->especialidad_inst;
        }
        if ($request->actividad == 'Trabaja' || $request->actividad == 'Estudia y Trabaja'){
            $modulo->trabaja = $request->trabaja;
            
            if($request->medio == 'Otra'){
                $modulo->medio = $request->medio.': '.$request->MedioTexto;
            } else { $modulo->medio = $request->medio; }
            
            if($request->requisitos_contrato == 'Otra'){
                $modulo->requisitos_contrato = $request->requisitos_contrato.' : '.$request->RequisitoTexto;
            } else { $modulo->requisitos_contrato = $request->requisitos_contrato; }
            
            if($request->idiomas == 'Otra'){
                $modulo->idiomas = $request->idiomas.': '.$request->IdiomaTexto;
            } else { $modulo->idiomas = $request->idiomas; }

            $modulo->hablar = $request->Hablar;
            $modulo->escribir = $request->Escribir;
            $modulo->leer = $request->Leer;
            $modulo->escuchar = $request->Escuchar;
            
            $modulo->antiguedad = $request->antiguedad;
            $modulo->anio_egreso = $request->anio_egreso;
            $modulo->salario_minimo = $request->salario_minimo;
            $modulo->nivel_jerarquico = $request->nivel_jerarquico;
            
            if($request->condicion_trabajo == 'Otra'){
                $modulo->condicion_trabajo = $request->condicion_trabajo.': '.$request->CondicionTexto;
            } else { $modulo->condicion_trabajo = $request->condicion_trabajo; }

            $modulo->relacion_area = $request->relacion_area;
            $modulo->organismo = $request->organismo;
            $modulo->giro = $request->giro;
            $modulo->razon_social = $request->razon_social;
            $modulo->domicilio = $request->domicilio;
            $modulo->ciudad = $request->ciudad;
            $modulo->municipio = $request->municipio;
            $modulo->estado = $request->estado;
            $modulo->telefono = $request->telefono;
            $modulo->fax = $request->fax;
            $modulo->email = $request->email;
            $modulo->pagina_web = $request->pagina_web;
            $modulo->jefe = $request->jefe;
            $modulo->sector_primario = $request->sector_primario;
            $modulo->sector_secundario = $request->sector_secundario;
            $modulo->sector_terciario = $request->sector_terciario;
            $modulo->tamanio_empresa = $request->tamanio_empresa;
        }
        //Si no hubo errores se continua con el registro del modulo en la BD
        $modulo->save();

        $existe = FormularioEgresado::where('no_control_egresado', $egresado->no_control_egresado)->first();

        if($existe){
            $afectado = FormularioEgresado::where('no_control_egresado', $egresado->no_control_egresado)
            ->update(['modulo_3' => $modulo->id]);
        }else{
            $formulario = new FormularioEgresado();
            $formulario->no_control_egresado = $egresado->no_control_egresado;
            $formulario->modulo_3 = $modulo->id;
            $formulario->save();

            $afectado = $egresado = Egresado::where('email', Auth::user()->email)
                ->update(['form_hecho' => 1]);
        }

        //se guarda he envia el correo a la empresa ingresada, siempre y cuando no se le haya enviado ya uno (esto es, cuando ya esta registrado)
        //se tomará el correo como el indicador de que es una empresa nueva
        $empresa_existe = Empresa::where('email', $modulo->email)->first();

        if(!$empresa_existe){
            $empresa = new Empresa();
            $empresa->email = $modulo->email;
            $empresa->nombre = $modulo->jefe;
            $empresa->estado = 0;

            $empresa->save();
            
            $user = User::where('email', $empresa->email)->first();
    
            if (!$user) {
                $user = new User();
                $user->name = $empresa->nombre;
                $user->email = $empresa->email;
                $user->password = bcrypt('12345678');
                
                $user->save();
                
                $user->roles()->sync([4]);
    
            }
    
            Mail::to($user->email)->send(new EmpresaMailable($empresa));
        }

        return back();

    }

    public function modulo4(Request $request)
    {

        $egresado = Egresado::where('email', Auth::user()->email)->first();

        $mensajes = [
            'required' => 'El campo :attribute es obligatorio.',
            'same'    => 'The :attribute and :other must match.',
            'size'    => 'El campo :attribute debe ser de :size.',
            'between' => 'The :attribute value :input is not between :min - :max.',
            'in'      => 'The :attribute must be one of the following types: :values',
        ];
        
        //validaciones
        $reglas = [
            'eficiencia' => 'required',
        ];

        $validar = Validator::make($request->all(), $reglas, $mensajes);

        if($validar->fails()){
            return back()->withErrors($validar); //si hay fallos, se regresa al formulario con los errores
        }

        //se seleccionó alguna opción de la primera pregunta
        $modulo = new Modulo4Egresado();
        $modulo->no_control_egresado = $egresado->no_control_egresado;
        
        $modulo->eficiencia = $request->eficiencia;
        $modulo->formacion_academica = $request->formacion_academica;
        $modulo->utilidad_residencias = $request->utilidad_residencias;
        $modulo->campo = $request->campo;
        $modulo->titulacion = $request->titulacion;
        $modulo->experiencia_laboral = $request->experiencia_laboral;
        $modulo->competencia_laboral = $request->competencia_laboral;
        $modulo->institucion_egreso = $request->institucion_egreso;
        $modulo->conocimientos_idiomas = $request->conocimientos_idiomas;
        $modulo->referencias = $request->referencias;
        $modulo->personalidad = $request->personalidad;
        $modulo->liderazgo = $request->liderazgo;
        if($request->AspectoTexto){
            $modulo->otros = $request->AspectoTexto.': '.$request->otros;
        } else {
            $modulo->otros = $request->otros; 
        }

        //Si no hubo errores se continua con el registro del modulo en la BD
        $modulo->save();

        //se actualiza el registro de formulario, agregando el nuevo modulo registrado
        $existe = FormularioEgresado::where('no_control_egresado', $egresado->no_control_egresado)->first();

        if($existe){
            $afectado = FormularioEgresado::where('no_control_egresado', $egresado->no_control_egresado)
            ->update(['modulo_4' => $modulo->id]);
        }else{
            $formulario = new FormularioEgresado();
            $formulario->no_control_egresado = $egresado->no_control_egresado;
            $formulario->modulo_4 = $modulo->id;
            $formulario->save();

            $afectado = $egresado = Egresado::where('email', Auth::user()->email)
                ->update(['form_hecho' => 1]);
        }

        return back();

    }

    public function modulo5(Request $request)
    {
        //return $request;
        $egresado = Egresado::where('email', Auth::user()->email)->first();

        $mensajes = [
            'required' => 'El campo :attribute es obligatorio.',
            'same'    => 'The :attribute and :other must match.',
            'size'    => 'El campo :attribute debe ser de :size.',
            'between' => 'The :attribute value :input is not between :min - :max.',
            'in'      => 'The :attribute must be one of the following types: :values',
        ];
        
        //validaciones
        $reglas = [
            'actualizacion' => 'required',
        ];

        $validar = Validator::make($request->all(), $reglas, $mensajes);

        if($validar->fails()){
            return back()->withErrors($validar); //si hay fallos, se regresa al formulario con los errores
        }

        //se seleccionó alguna opción de la primera pregunta
        $modulo = new Modulo5Egresado();
        $modulo->no_control_egresado = $egresado->no_control_egresado;
        if($request->actualizaciontexto && $request->actualizacion == 'Si'){
            $modulo->actualizacion = $request->actualizacion.': '.$request->actualizaciontexto;
        } else {
            $modulo->actualizacion = $request->actualizacion; 
        }
        if($request->posgradotexto && $request->posgrado == 'Si'){
            $modulo->posgrado = $request->posgrado.': '.$request->posgradotexto;
        } else {
            $modulo->posgrado = $request->posgrado; 
        }

        //Si no hubo errores se continua con el registro del modulo en la BD
        $modulo->save();

        //se actualiza el registro de formulario, agregando el nuevo modulo registrado
        $existe = FormularioEgresado::where('no_control_egresado', $egresado->no_control_egresado)->first();

        if($existe){
            $afectado = FormularioEgresado::where('no_control_egresado', $egresado->no_control_egresado)
                ->update(['modulo_5' => $modulo->id]);
        }else{
            $formulario = new FormularioEgresado();
            $formulario->no_control_egresado = $egresado->no_control_egresado;
            $formulario->modulo_5 = $modulo->id;
            $formulario->save();

            $afectado = $egresado = Egresado::where('email', Auth::user()->email)
                ->update(['form_hecho' => 1]);
        }

        return back();

    }

    public function modulo6(Request $request)
    {
        //return $request;
        $egresado = Egresado::where('email', Auth::user()->email)->first();

        $mensajes = [
            'required' => 'El campo :attribute es obligatorio.',
            'same'    => 'The :attribute and :other must match.',
            'size'    => 'El campo :attribute debe ser de :size.',
            'between' => 'The :attribute value :input is not between :min - :max.',
            'in'      => 'The :attribute must be one of the following types: :values',
        ];
        
        //validaciones
        $reglas = [
            'org_sociales' => 'required',
        ];

        $validar = Validator::make($request->all(), $reglas, $mensajes);

        if($validar->fails()){
            return back()->withErrors($validar); //si hay fallos, se regresa al formulario con los errores
        }

        //se seleccionó alguna opción de la primera pregunta
        $modulo = new Modulo6Egresado();
        $modulo->no_control_egresado = $egresado->no_control_egresado;
        if($request->org_socialestexto && $request->org_sociales == 'Si'){
            $modulo->org_sociales = $request->org_sociales.': '.$request->org_socialestexto;
        } else {
            $modulo->org_sociales = $request->org_sociales; 
        }

        if($request->org_profesionalestexto && $request->org_profesionales == 'Si'){
            $modulo->org_profesionales = $request->org_profesionales.': '.$request->org_profesionalestexto;
        } else {
            $modulo->org_profesionales = $request->org_profesionales; 
        }

        $modulo->org_egresados = $request->org_egresados; 

        //Si no hubo errores se continua con el registro del modulo en la BD
        $modulo->save();

        //se actualiza el registro de formulario, agregando el nuevo modulo registrado
        $existe = FormularioEgresado::where('no_control_egresado', $egresado->no_control_egresado)->first();

        if($existe){
            $afectado = FormularioEgresado::where('no_control_egresado', $egresado->no_control_egresado)
                ->update(['modulo_6' => $modulo->id]);
        }else{
            $formulario = new FormularioEgresado();
            $formulario->no_control_egresado = $egresado->no_control_egresado;
            $formulario->modulo_6 = $modulo->id;
            $formulario->save();

            $afectado = $egresado = Egresado::where('email', Auth::user()->email)
                ->update(['form_hecho' => 1]);
        }

        return back();

    }

    public function modulo7(Request $request)
    {
        //return $request;
        $egresado = Egresado::where('email', Auth::user()->email)->first();

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
            'comentarios' => 'max:60000',
        ];

        $validar = Validator::make($request->all(), $reglas, $mensajes);

        if($validar->fails()){
            return back()->withErrors($validar); //si hay fallos, se regresa al formulario con los errores
        }

        //se seleccionó alguna opción de la primera pregunta
        $modulo = new Modulo7Egresado();
        $modulo->no_control_egresado = $egresado->no_control_egresado;
        $modulo->comentarios = $request->comentarios;

        //Si no hubo errores se continua con el registro del modulo en la BD
        $modulo->save();

        //se actualiza el registro de formulario, agregando el nuevo modulo registrado
        $existe = FormularioEgresado::where('no_control_egresado', $egresado->no_control_egresado)->first();

        if($existe){
            $afectado = FormularioEgresado::where('no_control_egresado', $egresado->no_control_egresado)
                ->update(['modulo_7' => $modulo->id]);

            //se marca el egresado con el status de terminado en la tabla muestras_egresados
            $afectado = MuestraEgresado::where('no_control', $egresado->no_control_egresado)
                ->update(['formulario' => $existe->id]);
        }else{
            $formulario = new FormularioEgresado();
            $formulario->no_control_egresado = $egresado->no_control_egresado;
            $formulario->modulo_7 = $modulo->id;
            $formulario->save();

            $afectado = $egresado = Egresado::where('email', Auth::user()->email)
                ->update(['form_hecho' => 1]);

            //se marca el egresado con el status de terminado en la tabla muestras_egresados
            $afectadoM = MuestraEgresado::where('no_control', $egresado->no_control_egresado)
                ->update(['formulario' => $formulario->id]);
        }

        return back();
    }

}
