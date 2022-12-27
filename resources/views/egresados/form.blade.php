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
                        @if ($modulo == 8)
                            <h1 class="text-xl">
                                Ya ha contestado el formulario, le agradecemos su tiempo empleado.
                            </h1>
                        @else
                            @switch($modulo)
                                @case(1)
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
                                                <li>
                                                    Cuando de clic en Siguiente se guardarán los datos ingresos del modulo en que se encuentre, y no podrá volver a ingresarlos, verifique los datos que ingresó antes de dar clic en Siguiente.
                                                </li>
                                            </ol><br>
                                            Gracias por su gentil colaboración.
                                        </p>
                                    </div>
                                    <div class="mt-10">
                                        <div>
                                            <h1 class="text-xl">I. PERFIL DEL EGRESADO</h1>
                                            {!! Form::open(['route' => ['egresado.form.modulo1'], 'method' => 'post', 'class' => 'grid grid-cols-4 gap-4']) !!}
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
                                                    Domicilio:  <x-input-error :messages="$errors->get('Domicilio')"/>
                                                    {!! Form::text('Domicilio', '', ['placeholder' => 'Calle No. Colonia C.P.', 'class' => "px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500"]) !!}
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
                                                    Telefono de casa:
                                                    {!! Form::number('TelefonoCasa', '', ['class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
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
                                                {!! Form::submit('Siguiente', ['class' => 'bg-sky-500 hover:bg-sky-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white mt-5 mb-5 ml-5']) !!}
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                @break
                                @case(2)
                                <div>
                                    <h1 class="text-xl">II. PERTINENCIA Y DISPONIBILIDAD DE MEDIOS Y RECURSOS PARA EL APRENDIZAJE</h1>
                                    <h1 class="text-lg">Califique la calidad de la educación profesional proporcionada por el personal docente, así como el Plan de Estudios de la carrera que curso y las condiciones del plantel en cuanto a infraestructura.</h1>
                                    {!! Form::open(['route' => ['egresado.form.modulo2'], 'method' => 'post', 'class' => 'grid grid-cols-4 gap-4 mt-5']) !!}
                                        <label class="pr-10 col-span-2">II.1  Calidad de los docentes: </label>
                                        <div class="col-span-2">
                                            <span class="pr-3">Muy buena</span>{!! Form::radio('calidad_docentes', 'Muy buena', true, ['class' => 'mr-7']) !!}
                                            <span class="pr-3">Buena</span>{!! Form::radio('calidad_docentes', 'Buena', false, ['class' => 'mr-7']) !!}
                                            <span class="pr-3">Regular</span>{!! Form::radio('calidad_docentes', 'Regular', false, ['class' => 'mr-7']) !!}
                                            <span class="pr-3">Mala</span>{!! Form::radio('calidad_docentes', 'Mala', false, ['class' => 'mr-7']) !!}
                                        </div>

                                        <label class="pr-10 col-span-2">II.2  Plan de Estudios: </label>
                                        <div class="col-span-2">
                                            <span class="pr-3">Muy buena</span>{!! Form::radio('plan_estudios', 'Muy buena', true, ['class' => 'mr-7']) !!}
                                            <span class="pr-3">Buena</span>{!! Form::radio('plan_estudios', 'Buena', false, ['class' => 'mr-7']) !!}
                                            <span class="pr-3">Regular</span>{!! Form::radio('plan_estudios', 'Regular', false, ['class' => 'mr-7']) !!}
                                            <span class="pr-3">Mala</span>{!! Form::radio('plan_estudios', 'Mala', false, ['class' => 'mr-7']) !!}
                                        </div>

                                        <label class="pr-10 col-span-2">II.3  Oportunidad de participar en proyectos de investigación y desarrollo:</label>
                                        <div class="col-span-2">
                                            <span class="pr-3">Muy buena</span>{!! Form::radio('part_proyectos', 'Muy buena', true, ['class' => 'mr-7']) !!}
                                            <span class="pr-3">Buena</span>{!! Form::radio('part_proyectos', 'Buena', false, ['class' => 'mr-7']) !!}
                                            <span class="pr-3">Regular</span>{!! Form::radio('part_proyectos', 'Regular', false, ['class' => 'mr-7']) !!}
                                            <span class="pr-3">Mala</span>{!! Form::radio('part_proyectos', 'Mala', false, ['class' => 'mr-7']) !!}
                                        </div>

                                        <label class="pr-10 col-span-2">II.4   Énfasis que se le prestaba a la investigación dentro del proceso de enseñanza: </label>
                                        <div class="col-span-2">
                                            <span class="pr-3">Muy buena</span>{!! Form::radio('enfasis_investigacion', 'Muy buena', true, ['class' => 'mr-7']) !!}
                                            <span class="pr-3">Buena</span>{!! Form::radio('enfasis_investigacion', 'Buena', false, ['class' => 'mr-7']) !!}
                                            <span class="pr-3">Regular</span>{!! Form::radio('enfasis_investigacion', 'Regular', false, ['class' => 'mr-7']) !!}
                                            <span class="pr-3">Mala</span>{!! Form::radio('enfasis_investigacion', 'Mala', false, ['class' => 'mr-7']) !!}
                                        </div>
                                        
                                        <label class="pr-10 col-span-2">II.5  Satisfacción con las condiciones de estudio (infraestructura): </label>
                                        <div class="col-span-2">
                                            <span class="pr-3">Muy buena</span>{!! Form::radio('satisfaccion_cond', 'Muy buena', true, ['class' => 'mr-7']) !!}
                                            <span class="pr-3">Buena</span>{!! Form::radio('satisfaccion_cond', 'Buena', false, ['class' => 'mr-7']) !!}
                                            <span class="pr-3">Regular</span>{!! Form::radio('satisfaccion_cond', 'Regular', false, ['class' => 'mr-7']) !!}
                                            <span class="pr-3">Mala</span>{!! Form::radio('satisfaccion_cond', 'Mala', false, ['class' => 'mr-7']) !!}
                                        </div>
                                        
                                        <label class="pr-10 col-span-2">II.6  Experiencia obtenida a través de la residencia profesional: </label>
                                        <div class="col-span-2">
                                            <span class="pr-3">Muy buena</span>{!! Form::radio('experiencia_residencia', 'Muy buena', true, ['class' => 'mr-7']) !!}
                                            <span class="pr-3">Buena</span>{!! Form::radio('experiencia_residencia', 'Buena', false, ['class' => 'mr-7']) !!}
                                            <span class="pr-3">Regular</span>{!! Form::radio('experiencia_residencia', 'Regular', false, ['class' => 'mr-7']) !!}
                                            <span class="pr-3">Mala</span>{!! Form::radio('experiencia_residencia', 'Mala', false, ['class' => 'mr-7']) !!}
                                        </div>
                                        {!! Form::submit('Siguiente', ['class' => 'bg-sky-500 hover:bg-sky-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white mt-5 mb-5 ml-5']) !!}
                                    {!! Form::close() !!}
                                </div>
                                @break

                                @default
                                <p>Default</p>
                            @endswitch
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
