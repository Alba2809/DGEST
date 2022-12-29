<?php

namespace App\Http\Controllers;

use App\Models\Egresado;
use App\Models\FormularioEmpresa;
use App\Models\Modulo3Egresado;
use App\Models\ModuloAEmpresa;
use App\Models\ModuloBEmpresa;
use App\Models\ModuloCEmpresa;
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
                $existe = ModuloCEmpresa::where('emaemail_empresail', $empresa_mail)->first();
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

        //se seleccionó alguna opción de la primera pregunta
        $existe_modulo = ModuloAEmpresa::where('email_empresa', $empresa_mail)->first();

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
