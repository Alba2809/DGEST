<?php

namespace App\Http\Controllers;

use App\Models\Egresado;
use App\Models\FormularioEgresado;
use App\Models\Modulo1Egresado;
use App\Models\Modulo2Egresado;
use App\Models\Modulo3Egresado;
use App\Models\Modulo4Egresado;
use App\Models\Modulo5Egresado;
use App\Models\Modulo6Egresado;
use App\Models\Modulo7Egresado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
                                        $modulo = 6;
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

    public function store(Request $request)
    {
        return $request;
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
