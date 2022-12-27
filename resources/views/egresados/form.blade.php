<style type="text/css">
    input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        margin: 0; 
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Formulario de Egresado') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        @if ($egresado->form_hecho)
                            <h1 class="text-xl">
                                Ya ha contestado el formulario, le agradecemos su tiempo empleado.
                            </h1>
                        @else
                            <div>
                                <h1 class="text-xl">Instrucciones</h1>
                                <p>
                                    Por favor lea cuidadosamente y conteste este cuestionario de la siguiente manera, según sea el caso: <br>
                                    <br>
                                    <ol class="list-decimal ml-10">
                                        <li>
                                            En el caso de preguntas cerradas, seleccione la que considere apropiada.
                                        </li>
                                        <li>
                                            En las preguntas de valoración se utiliza la escala del 1 al 5 en la que 1 es “muy malo” y 5 es “muy bueno”.
                                        </li>
                                        <li>
                                            En los casos de preguntas abiertas dejamos un campo de texto para que usted escriba con mayúsculas una respuesta.
                                        </li>
                                        <li>
                                            Al final anexamos un inciso para comentarios y sugerencias, le agradeceremos anote ahí lo que considere prudente para mejorar nuestro sistema educativo o bien los temas que, a su juicio, omitimos en el cuestionario.
                                        </li>
                                    </ol><br>
                                    Gracias por su gentil colaboración.
                                </p>
                            </div>
                            <div class="mt-10">
                                <div>
                                    <h1 class="text-xl">I. PERFIL DEL EGRESADO</h1>
                                    {!! Form::open(['route' => ['egresado.form.store'], 'method' => 'post', 'class' => 'grid grid-cols-4 gap-4']) !!}
                                        <label class="col-span-3">
                                            Nombre:
                                            {!! Form::text('Nombre', $egresado->nombre, ['disabled', 'placeholder' => 'Paterno Materno Nombre(s)', 'class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                        </label>
                                        <label>
                                            No. de control:
                                            {!! Form::text('NoControl', $egresado->no_control_egresado, ['disabled', 'class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                        </label>
                                        <label class="col-span-2">
                                            Fecha de nacimiento:
                                            {!! Form::text('FechaNac', $egresado->fecha_nac, ['disabled', 'class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                        </label>
                                        <label class="col-span-2">
                                            CURP:
                                            {!! Form::text('Curp', $egresado->curp, ['disabled', 'class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                        </label>
                                        <label class="col-span-2">
                                            <span class="pr-10">Sexo:</span>
                                            @if ($egresado->sexo == 0)
                                                <span class="pr-3">Hombre</span>{!! Form::radio('Sexo', 'Hombre', true, ['disabled', 'class' => 'mr-7']) !!} 
                                                <span class="pr-3">Mujer</span>{!! Form::radio('Sexo', 'Mujer', false, ['disabled', ]) !!} 
                                            @else
                                                <span class="pr-3">Hombre</span>{!! Form::radio('Sexo', 'Hombre', false, ['disabled', 'class' => 'mr-7']) !!}
                                                <span class="pr-3">Mujer</span>{!! Form::radio('Sexo', 'Mujer', true, ['disabled', ]) !!}
                                            @endif
                                        </label>
                                        <label class="col-span-2">
                                            <span class="pr-10">Estado civil:</span>
                                            <span class="pr-3">Soltero(a)</span>{!! Form::radio('EstadoCivil', 'Soltero', true, ['class' => 'mr-7']) !!} 
                                            <span class="pr-3">Casado(a)</span>{!! Form::radio('EstadoCivil', 'Casado', false, ['class' => 'mr-7']) !!} 
                                            <span>Otro</span>{!! Form::radio('EstadoCivil', 'Otro', false, ['']) !!} 
                                        </label>
                                        <label class="col-span-4">
                                            Domicilio:
                                            {!! Form::text('Domicilio', '', ['placeholder' => 'Calle No. Colonia C.P.', 'class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                        </label>
                                        <label class="col-span-2">
                                            Ciudad:
                                            {!! Form::text('Ciudad', '', ['class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                        </label>
                                        <label class="col-span-1">
                                            Municipio:
                                            {!! Form::text('Municipio', '', ['class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                        </label>
                                        <label class="col-span-1">
                                            Estado:
                                            {!! Form::text('Estado', '', ['class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                        </label>
                                        <label class="col-span-1">
                                            Telefono:
                                            {!! Form::number('Telefono', '', ['class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                        </label>
                                        <label class="col-span-1">
                                        </label>
                                        <label class="col-span-2">
                                            E-mail:
                                            {!! Form::text('Email', $egresado->email, ['disabled', 'class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                        </label>
                                        <label class="col-span-4">
                                            Carrera de Egreso y especialidad:
                                            {!! Form::text('CarreraEspecialidad', $egresado->carrera.' - '.$egresado->especialidad, ['disabled', 'class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                        </label>
                                        <label class="col-span-2">
                                            Mes y Año de egreso:
                                            {!! Form::text('MesAnio', $egresado->mes_egreso.' / '.$egresado->anio_egreso, ['disabled', 'class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                        </label>
                                        <label class="col-span-1">
                                        </label>
                                        <label class="col-span-1">
                                            <span class="pr-2">Titulado(a):</span> <br>
                                            <span class="pr-3">Si</span>{!! Form::radio('Titulado', 'Si', true, ['class' => 'mr-7']) !!} 
                                            <span class="pr-3">No</span>{!! Form::radio('Titulado', 'No', false, ['']) !!}
                                        </label>
                                        <label class="col-span-2">
                                            Dominio de idioma extranjero:
                                            <span>Ingles</span>{!! Form::number('IdiomaIngles', '', ['class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                        </label>
                                        <label class="col-span-2">
                                            Otro:
                                            {!! Form::number('IdiomaOtro', '', ['class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                        </label>
                                        <label class="col-span-4">
                                            Manejo de paquetes computacionales (especificar):
                                            {!! Form::text('ManejoPaquetes', '', ['class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                        </label>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
