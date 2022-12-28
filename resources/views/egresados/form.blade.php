<style type="text/css">
    input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        margin: 0; 
    }
</style>

<script type="text/javascript">
    function actOpc() {
        
        
        if (document.getElementById('actEstudiaTrabaja').checked) {
            document.getElementById('estudiaopciones').classList.remove("hidden");
            document.getElementById('trabajaopciones').classList.remove("hidden");
        }
        else{
            if (document.getElementById('actEstudia').checked) {
                document.getElementById('estudiaopciones').classList.remove("hidden");
            }
            else document.getElementById('estudiaopciones').classList.add("hidden");
            
            if (document.getElementById('actTrabaja').checked) {
                document.getElementById('trabajaopciones').classList.remove("hidden");
            }
            else document.getElementById('trabajaopciones').classList.add("hidden");
        }
    }
    function otratexto() {
        if (document.getElementById('Otra').checked) {
            document.getElementById('OtraTexto').classList.remove("hidden");
        }
        else document.getElementById('OtraTexto').classList.add("hidden");
        
        if (document.getElementById('MedioOtro').checked) {
            document.getElementById('MedioTexto').classList.remove("hidden");
        }
        else document.getElementById('MedioTexto').classList.add("hidden");
        
        if (document.getElementById('RequisitoOtro').checked) {
            document.getElementById('RequisitoTexto').classList.remove("hidden");
        }
        else document.getElementById('RequisitoTexto').classList.add("hidden");
        
        if (document.getElementById('IdiomaOtro').checked) {
            document.getElementById('IdiomaTexto').classList.remove("hidden");
        }
        else document.getElementById('IdiomaTexto').classList.add("hidden");
        
        if (document.getElementById('CondicionOtro').checked) {
            document.getElementById('CondicionTexto').classList.remove("hidden");
        }
        else document.getElementById('CondicionTexto').classList.add("hidden");
    }
    
</script>

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
                                                {!! Form::submit('Siguiente', ['class' => 'bg-sky-500 hover:bg-sky-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white mt-5 ml-5']) !!}
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
                                        {!! Form::submit('Siguiente', ['class' => 'bg-sky-500 hover:bg-sky-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white mt-5 ml-5']) !!}
                                    {!! Form::close() !!}
                                </div>
                                @break
                                @case(3)
                                <div>
                                    <h1 class="text-xl">III. UBICACIÓN LABORAL DE LOS EGRESADOS</h1>
                                    <h1 class="text-lg">Indique a cuál de los siguientes puntos corresponde su situación actual.</h1>
                                    {!! Form::open(['route' => ['egresado.form.modulo3'], 'method' => 'post', 'class' => 'mt-5']) !!}
                                    <div class="grid grid-cols-4 gap-4">

                                        <label class="pr-10 col-span-4">III.1  Actividad a la que se dedica actualmente: </label> <x-input-error :messages="$errors->get('actividad')"/>
                                        <span class="col-span-1">Trabaja{!! Form::radio('actividad', 'Trabaja', false, ['class' => 'mr-7 ml-3', 'onclick' => 'actOpc()', 'id' => 'actTrabaja']) !!}</span>
                                        <span class="col-span-1">Estudia{!! Form::radio('actividad', 'Estudia', false, ['class' => 'mr-7 ml-3', 'onclick' => 'actOpc()', 'id' => 'actEstudia']) !!}</span>
                                        <span class="col-span-1">Estudia y Trabaja{!! Form::radio('actividad', 'Estudia y Trabaja', false, ['class' => 'mr-7 ml-3', 'onclick' => 'actOpc()', 'id' => 'actEstudiaTrabaja']) !!}</span>
                                        <span class="col-span-1">No estudia ni trabaja{!! Form::radio('actividad', 'No estudia ni trabaja', true, ['class' => 'mr-7 ml-3', 'onclick' => 'actOpc()']) !!}</span>
                                        
                                        <div id="estudiaopciones" class="col-span-4 hidden">
                                            <label class="pr-10 col-span-2">Si estudia, indicar si es:</label>
                                            <div class="col-span-4">
                                                <span class="pr-3">Especialidad</span>{!! Form::radio('estudia', 'Especialidad', true, ['class' => 'mr-7', 'onclick' => 'otratexto()']) !!}
                                                <span class="pr-3">Maestría</span>{!! Form::radio('estudia', 'Maestría', false, ['class' => 'mr-7', 'onclick' => 'otratexto()']) !!}
                                                <span class="pr-3">Doctorado</span>{!! Form::radio('estudia', 'Doctorado', false, ['class' => 'mr-7', 'onclick' => 'otratexto()']) !!}
                                                <span class="pr-3">Idiomas</span>{!! Form::radio('estudia', 'Idiomas', false, ['class' => 'mr-7', 'onclick' => 'otratexto()']) !!}
                                                <span class="pr-3">Otra</span>{!! Form::radio('estudia', 'Otra', false, ['class' => 'mr-7', 'onclick' => 'otratexto()', 'id' => 'Otra']) !!}
                                                {!! Form::text('OtraTexto', '', ['class' => 'hidden', 'id' => 'OtraTexto']) !!}
                                            </div>
                                            <div class="mt-3">
                                                <span class="col-span-1">
                                                    <label class="pr-10 self-center items-center">Especialidad e Institución:</label>
                                                </span>
                                                {!! Form::text('especialidad_inst', '', ['style' => 'width: 80%']) !!} <br>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div id="trabajaopciones" class="grid grid-cols-4 gap-4 hidden">
                                        <br><label class="pr-10 col-span-4">III.2  En caso de trabajar: Tiempo Transcurrido para obtener el primer empleo: </label>
                                        <span class="col-span-1">Antes de Egresar{!! Form::radio('trabaja', 'Antes de Egresar', true, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Menos de seis meses{!! Form::radio('trabaja', 'Menos de seis meses', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Entre seis meses y un año{!! Form::radio('trabaja', 'Entre seis meses y un año', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Más de un año{!! Form::radio('trabaja', 'Más de un año', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        
                                        <label class="pr-10 col-span-4">III.3  Medio para Obtener el Empleo:</label>
                                        <span class="col-span-1">Bolsa de trabajo del plantel{!! Form::radio('medio', 'Bolsa de trabajo del plantel', true, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()']) !!}</span>
                                        <span class="col-span-1">Contactos personales{!! Form::radio('medio', 'Contactos personales', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()']) !!}</span>
                                        <span class="col-span-2">Residencia Profesional{!! Form::radio('medio', 'Residencia Profesional', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()']) !!}</span>
                                        <span class="col-span-2">Medios masivos de comunicación{!! Form::radio('medio', 'Medios masivos de comunicación', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()']) !!}</span>
                                        <span class="col-span-2">Otros{!! Form::radio('medio', 'Otra', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()', 'id' => 'MedioOtro']) !!}
                                        {!! Form::text('MedioTexto', '', ['class' => 'hidden', 'id' => 'MedioTexto']) !!}</span>
                                        
                                        <label class="pr-10 col-span-4">III.4  Requisitos de contratación:</label>
                                        <span class="col-span-1">Competencias laborales{!! Form::radio('requisitos_contrato', 'Competencias laborales', true, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()']) !!}</span>
                                        <span class="col-span-1">Título Profesiona{!! Form::radio('requisitos_contrato', 'Título Profesiona', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()']) !!}</span>
                                        <span class="col-span-1">Examen de selección{!! Form::radio('requisitos_contrato', 'Examen de selección', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()']) !!}</span>
                                        <span class="col-span-1">Idioma Extranjero{!! Form::radio('requisitos_contrato', 'Idioma Extranjero', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()']) !!}</span>
                                        <span class="col-span-2">Actitudes y habilidades socio-comunicativas (principios y valores){!! Form::radio('requisitos_contrato', 'Actitudes y habilidades socio-comunicativas (principios y valores)', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()']) !!}</span>
                                        <span class="col-span-1">Ninguno{!! Form::radio('requisitos_contrato', 'Ninguno', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()']) !!}</span>
                                        <span class="col-span-2">Otros{!! Form::radio('requisitos_contrato', 'Otra', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()', 'id' => 'RequisitoOtro']) !!}
                                        {!! Form::text('RequisitoTexto', '', ['class' => 'hidden', 'id' => 'RequisitoTexto']) !!}</span>
                                        
                                        <label class="pr-10 col-span-4">III.5  Idioma que utiliza en su trabajo:</label>
                                        <span class="col-span-1">Inglés{!! Form::radio('idiomas', 'Inglés', true, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()']) !!}</span>
                                        <span class="col-span-1">Francés{!! Form::radio('idiomas', 'Francés', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()']) !!}</span>
                                        <span class="col-span-1">Alemán{!! Form::radio('idiomas', 'Alemán', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()']) !!}</span>
                                        <span class="col-span-1">Japonés{!! Form::radio('idiomas', 'Japonés', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()']) !!}</span>
                                        <span class="col-span-2">Otros{!! Form::radio('idiomas', 'Otra', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()', 'id' => 'IdiomaOtro']) !!}
                                        {!! Form::text('IdiomaTexto', '', ['class' => 'hidden', 'id' => 'IdiomaTexto']) !!}</span>
                                        
                                        <label class="pr-10 col-span-4">III.6  En qué proporción utiliza en el desempeño de sus actividades laborales cada una de las habilidades del idioma extranjero:</label>
                                        <span class="col-span-1">Hablar {!! Form::number('Hablar', '', ['placeholder' => '0', 'style' => 'width: 60px', 'class' => 'p-2']) !!} <span>%</span></span>
                                        <span class="col-span-1">Escribir {!! Form::number('Escribir', '', ['placeholder' => '0', 'style' => 'width: 60px', 'class' => 'p-2']) !!} <span>%</span></span>
                                        <span class="col-span-1">Leer {!! Form::number('Leer', '', ['placeholder' => '0', 'style' => 'width: 60px', 'class' => 'p-2']) !!} <span>%</span></span>
                                        <span class="col-span-1">Escuchar {!! Form::number('Escuchar', '', ['placeholder' => '0', 'style' => 'width: 60px', 'class' => 'p-2']) !!} <span>%</span></span>
                                        
                                        <label class="pr-10 col-span-4">III.7  Antigüedad en el empleo:</label>
                                        <span class="col-span-1">Menos de un año{!! Form::radio('antiguedad', 'Menos de un año', true, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Un año{!! Form::radio('antiguedad', 'Un año', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Dos años{!! Form::radio('antiguedad', 'Dos años', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Tres Años{!! Form::radio('antiguedad', 'Tres Años', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Más de tres años{!! Form::radio('antiguedad', 'Más de tres años', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-4">Año de ingreso {!! Form::number('anio_egreso', '', ['placeholder' => '2020', 'style' => 'width: 60px', 'class' => 'p-2']) !!}</span>

                                        <label class="pr-10 col-span-4">III.8  Ingreso (salario mínimo diario):</label>
                                        <span class="col-span-1">Menos de cinco{!! Form::radio('salario_minimo', 'Menos de cinco', true, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Entre cinco y siete{!! Form::radio('salario_minimo', 'Entre cinco y siete', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Entre 8 y 10{!! Form::radio('salario_minimo', 'Entre 8 y 10', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Más de 10{!! Form::radio('salario_minimo', 'Más de 10', false, ['class' => 'mr-7 ml-3']) !!}</span>

                                        <label class="pr-10 col-span-4">III.9  Nivel jerárquico en el trabajo:</label>
                                        <span class="col-span-1">Técnico{!! Form::radio('nivel_jerarquico', 'Técnico', true, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Supervisor{!! Form::radio('nivel_jerarquico', 'Supervisor', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Jefe de área{!! Form::radio('nivel_jerarquico', 'Jefe de área', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Funcionario{!! Form::radio('nivel_jerarquico', 'Funcionario', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Directivo{!! Form::radio('nivel_jerarquico', 'Directivo', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Empresario{!! Form::radio('nivel_jerarquico', 'Empresario', false, ['class' => 'mr-7 ml-3']) !!}</span>

                                        <label class="pr-10 col-span-4">III.10  Condición de Trabajo:</label>
                                        <span class="col-span-1">Base{!! Form::radio('condicion_trabajo', 'Base', true, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()']) !!}</span>
                                        <span class="col-span-1">Eventual{!! Form::radio('condicion_trabajo', 'Eventual', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()']) !!}</span>
                                        <span class="col-span-1">Contrato{!! Form::radio('condicion_trabajo', 'Contrato', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()']) !!}</span>
                                        <span class="col-span-2">Otros{!! Form::radio('condicion_trabajo', 'Otra', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()', 'id' => 'CondicionOtro']) !!}
                                        {!! Form::text('CondicionTexto', '', ['class' => 'hidden', 'id' => 'CondicionTexto']) !!}</span>
                                        
                                        <label class="pr-10 col-span-4">III.11  Relación del trabajo con su área de formación:</label>
                                        <span class="col-span-1">0%{!! Form::radio('relacion_area', '0%', true, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">20%{!! Form::radio('relacion_area', '20%', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">40%{!! Form::radio('relacion_area', '40%', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">60%{!! Form::radio('relacion_area', '60%', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">80%{!! Form::radio('relacion_area', '80%', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">100%{!! Form::radio('relacion_area', '100%', false, ['class' => 'mr-7 ml-3']) !!}</span>

                                        <label class="pr-10 col-span-4">III.12  Datos de la empresa u organismo:</label>
                                        <span>ORGANISMO:</span>
                                        <span class="col-span-1">Público{!! Form::radio('organismo', 'Público', true, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Privado{!! Form::radio('organismo', 'Privado', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Social{!! Form::radio('organismo', 'Social', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        
                                        <span class="col-span-4">Giro o actividad principal de la empresa u organismo:
                                        {!! Form::text('giro', '', ['style' => 'width: 65%']) !!}</span>
                                        
                                        <span class="col-span-4">Razón Social:
                                        {!! Form::text('razon_social', '', ['style' => 'width: 89%']) !!}</span>
                                        
                                        <span class="col-span-4">Domicilio:
                                        {!! Form::text('domicilio', '', ['style' => 'width: 91%', 'placeholder' => 'Calle Número Colonia C.P.']) !!}</span>
                                        
                                        <span class="col-span-1">Ciudad:
                                        {!! Form::text('ciudad', '', ['style' => 'width: 50%']) !!}</span>
                                        
                                        <span class="col-span-1">Municipio:
                                        {!! Form::text('municipio', '', ['style' => 'width: 50%']) !!}</span>
                                        
                                        <span class="col-span-1">Estado:
                                        {!! Form::text('estado', '', ['style' => 'width: 50%']) !!}</span>
                                        
                                        <div class="col-span-1"></div>
                                        <span class="col-span-1 self-center items-center">Contactos:</span>
                                        <span class="col-span-1">{!! Form::number('telefono', '', ['placeholder' => 'Telefono']) !!}</span>
                                        <span class="col-span-1">{!! Form::number('fax', '', ['placeholder' => 'Fax']) !!}</span>
                                        <span class="col-span-1">{!! Form::text('email', '', ['placeholder' => 'E-mail']) !!}</span>
                                        
                                        <span class="col-span-3">Página Web:
                                        {!! Form::text('pagina_web', '', ['style' => 'width: 48%']) !!}</span>
                                        
                                        <span class="col-span-4">Nombre y Puesto del Jefe Inmediato:
                                        {!! Form::text('jefe', '', ['style' => 'width: 75%']) !!}</span>
    
                                        <label class="pr-10 col-span-4">III.13  Sector Económico de la Empresa u Organización:</label>
                                        <span class="col-span-4">SECTOR PRIMARIO:</span>
                                        <span class="col-span-1">Agroindustria{!! Form::radio('sector_primario', 'Agroindustria', true, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Pesquero{!! Form::radio('sector_primario', 'Pesquero', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Minero{!! Form::radio('sector_primario', 'Minero', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Otros{!! Form::radio('sector_primario', 'Otros', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        
                                        <span class="col-span-4">SECTOR SECUNDARIO:</span>
                                        <span class="col-span-1">Industrial{!! Form::radio('sector_secundario', 'Industrial', true, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Construcción{!! Form::radio('sector_secundario', 'Construcción', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Petrolero{!! Form::radio('sector_secundario', 'Petrolero', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Otros{!! Form::radio('sector_secundario', 'Otros', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        
                                        <span class="col-span-4">SECTOR TERCIARIO:</span>
                                        <span class="col-span-1">Educativo{!! Form::radio('sector_terciario', 'Educativo', true, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Turismo{!! Form::radio('sector_terciario', 'Turismo', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Comercio{!! Form::radio('sector_terciario', 'Comercio', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Servicios Financieros{!! Form::radio('sector_terciario', 'Servicios Financieros', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Otros{!! Form::radio('sector_terciario', 'Otros', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        
                                        <label class="pr-10 col-span-4">III.14  Tamaño de la empresa u organización:</label>
                                        <span class="col-span-1">Microempresa (1-30){!! Form::radio('tamanio_empresa', 'Microempresa (1-30)', true, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Pequeña (31-100){!! Form::radio('tamanio_empresa', 'Pequeña (31-100)', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Mediana (101-500){!! Form::radio('tamanio_empresa', 'Mediana (101-500)', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Grande (más de 500){!! Form::radio('tamanio_empresa', 'Grande (más de 500)', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                    </div>
                                    {!! Form::submit('Siguiente', ['class' => 'bg-sky-500 hover:bg-sky-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white mt-5 mb-5 ml-5']) !!}
                                    {!! Form::close() !!}
                                </div>
                                @break

                                @case(4)
                                <div>
                                    <h1 class="text-xl">
                                        IV. DESEMPEÑO PROFESIONAL DE LOS EGRESADOS
                                        <span class="text-base">(COHERENCIA ENTRE LA FORMACIÓN Y EL TIPO DE EMPLEO)</span>
                                    </h1>
                                    <h1 class="text-lg">Marcar los campos que correspondan a su trayectoria profesional.</h1>

                                    {!! Form::open(['route' => ['egresado.form.modulo4'], 'method' => 'post', 'class' => 'mt-5']) !!}
                                    <div class="grid grid-cols-4 gap-4">
                                        <label class="pr-10 col-span-4">IV.1  Eficiencia para realizar las actividades laborales, en relación con su formación académica: </label>
                                        <span class="col-span-1">Muy eficiente{!! Form::radio('eficiencia', 'Muy eficiente', true, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Eficiente{!! Form::radio('eficiencia', 'Eficiente', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Poco eficiente{!! Form::radio('eficiencia', 'Poco eficiente', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Muy eficiente{!! Form::radio('eficiencia', 'Muy eficiente', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        
                                        <label class="pr-10 col-span-4">IV.2  Cómo califica su formación académica con respecto a su desempeño laboral:</label>
                                        <span class="col-span-1">Excelente{!! Form::radio('formacion_academica', 'Excelente', true, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Bueno{!! Form::radio('formacion_academica', 'Bueno', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Regular{!! Form::radio('formacion_academica', 'Regular', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Malo{!! Form::radio('formacion_academica', 'Malo', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Pésimo{!! Form::radio('formacion_academica', 'Pésimo', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        
                                        <label class="pr-10 col-span-4">IV.3  Utilidad de las residencias profesionales o prácticas profesionales para su desarrollo laboral y profesional:</label>
                                        <span class="col-span-1">Excelente{!! Form::radio('utilidad_residencias', 'Excelente', true, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Bueno{!! Form::radio('utilidad_residencias', 'Bueno', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Regular{!! Form::radio('utilidad_residencias', 'Regular', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Malo{!! Form::radio('utilidad_residencias', 'Malo', false, ['class' => 'mr-7 ml-3']) !!}</span>
                                        <span class="col-span-1">Pésimo{!! Form::radio('utilidad_residencias', 'Pésimo', false, ['class' => 'mr-7 ml-3']) !!}</span>

                                        <label class="pr-10 col-span-4">IV.4  Aspectos que valora la empresa u organismo para la contratación de egresados:</label>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div class="grid grid-cols-5 gap-5">
                                            <span>Poco</span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span>Mucho</span>

                                            <span class="justify-self-center">1</span>
                                            <span class="justify-self-center">2</span>
                                            <span class="justify-self-center">3</span>
                                            <span class="justify-self-center">4</span>
                                            <span class="justify-self-center">5</span>
                                        </div>
                                    </div>
                                    <div class=" divide-y divide-slate-200">
                                        <div class="grid grid-cols-4 gap-4">
                                            <span class="col-span-3 h-10 flex items-center">1. Área o Campo de Estudio</span>
                                            <div class="grid grid-cols-5 gap-5">
                                                {!! Form::radio('campo', '1', true, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('campo', '2', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('campo', '3', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('campo', '4', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('campo', '5', false, ['class' => 'place-self-center']) !!}
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-4 gap-4">
                                            <span class="col-span-3 h-10 flex items-center">2. Titulación</span>
                                            <div class="grid grid-cols-5 gap-5">
                                                {!! Form::radio('titulacion', '1', true, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('titulacion', '2', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('titulacion', '3', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('titulacion', '4', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('titulacion', '5', false, ['class' => 'place-self-center']) !!}
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-4 gap-4">
                                            <span class="col-span-3 h-10 flex items-center">3. Experiencia Laboral/práctica (antes de egresar)</span>
                                            <div class="grid grid-cols-5 gap-5">
                                                {!! Form::radio('experiencia_laboral', '1', true, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('experiencia_laboral', '2', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('experiencia_laboral', '3', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('experiencia_laboral', '4', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('experiencia_laboral', '5', false, ['class' => 'place-self-center']) !!}
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-4 gap-4">
                                            <span class="col-span-3 h-20 flex items-center">4. Competencia Laboral: Habilidad para resolver problemas, capacidad de análisis, habilidad para el aprendizaje, creatividad, administración del tiempo, capacidad de negociación, habilidades manuales, trabajo en equipo, iniciativa, honestidad, persistencia, etc.</span>
                                            <div class="grid grid-cols-5 gap-5">
                                                {!! Form::radio('competencia_laboral', '1', true, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('competencia_laboral', '2', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('competencia_laboral', '3', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('competencia_laboral', '4', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('competencia_laboral', '5', false, ['class' => 'place-self-center']) !!}
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-4 gap-4">
                                            <span class="col-span-3 h-10 flex items-center">5. Posicionamiento de la Institución de Egreso.</span>
                                            <div class="grid grid-cols-5 gap-5">
                                                {!! Form::radio('institucion_egreso', '1', true, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('institucion_egreso', '2', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('institucion_egreso', '3', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('institucion_egreso', '4', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('institucion_egreso', '5', false, ['class' => 'place-self-center']) !!}
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-4 gap-4">
                                            <span class="col-span-3 h-10 flex items-center">6. Conocimiento de Idiomas Extranjeros.</span>
                                            <div class="grid grid-cols-5 gap-5">
                                                {!! Form::radio('conocimientos_idiomas', '1', true, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('conocimientos_idiomas', '2', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('conocimientos_idiomas', '3', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('conocimientos_idiomas', '4', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('conocimientos_idiomas', '5', false, ['class' => 'place-self-center']) !!}
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-4 gap-4">
                                            <span class="col-span-3 h-10 flex items-center">7. Recomendaciones/referencias.</span>
                                            <div class="grid grid-cols-5 gap-5">
                                                {!! Form::radio('referencias', '1', true, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('referencias', '2', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('referencias', '3', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('referencias', '4', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('referencias', '5', false, ['class' => 'place-self-center']) !!}
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-4 gap-4">
                                            <span class="col-span-3 h-10 flex items-center">8. Personalidad/Actitudes.</span>
                                            <div class="grid grid-cols-5 gap-5">
                                                {!! Form::radio('personalidad', '1', true, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('personalidad', '2', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('personalidad', '3', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('personalidad', '4', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('personalidad', '5', false, ['class' => 'place-self-center']) !!}
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-4 gap-4">
                                            <span class="col-span-3 h-10 flex items-center">9. Capacidad de liderazgo.</span>
                                            <div class="grid grid-cols-5 gap-5">
                                                {!! Form::radio('liderazgo', '1', true, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('liderazgo', '2', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('liderazgo', '3', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('liderazgo', '4', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('liderazgo', '5', false, ['class' => 'place-self-center']) !!}
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-4 gap-4">
                                            <span class="col-span-3 h-10 flex items-center">10. Otros.
                                                {!! Form::text('AspectoTexto', '', ['class' => 'h-6']) !!}
                                            </span>
                                            <div class="grid grid-cols-5 gap-5">
                                                {!! Form::radio('otros', '1', true, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('otros', '2', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('otros', '3', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('otros', '4', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('otros', '5', false, ['class' => 'place-self-center']) !!}
                                            </div>
                                        </div>
                                    </div>
                                    {!! Form::submit('Siguiente', ['class' => 'bg-sky-500 hover:bg-sky-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white mt-5 ml-5']) !!}
                                    {!! Form::close() !!}
                                </div>
                                @break

                                @case(5)
                                <div>
                                    <h1 class="text-xl">
                                        V. EXPECTATIVAS DE DESARROLLO, SUPERACIÓN PROFESIONAL Y DE ACTUALIZACIÓN
                                    </h1>

                                    {!! Form::open(['route' => ['egresado.form.modulo5'], 'method' => 'post', 'class' => 'mt-5']) !!}
                                    <div class="grid grid-cols-5 gap-5  flex items-center">
                                        <label class="pr-10 col-span-5">V.1  ACTUALIZACIÓN DE CONOCIMIENTOS:</label>
                                        <span class="col-span-2">Le gustaría tomar cursos de actualización:</span>
                                        <span class="col-span-1">
                                            Si
                                            {!! Form::radio('actualizacion', 'Si', true, ['class' => 'mr-7 ml-3']) !!}
                                            No
                                            {!! Form::radio('actualizacion', 'No', false, ['class' => 'mr-7 ml-3']) !!}
                                        </span>
                                        <span class="col-span-2">
                                            <div class="grid grid-cols-5 gap-5 flex items-center">
                                                ¿Cuáles?:
                                                {!! Form::text('actualizaciontexto', '', ['class' => 'col-span-4']) !!}
                                            </div>
                                        </span>

                                        <span class="col-span-2">Le gustaría tomar algún Posgrado:</span>
                                        <span class="col-span-1">
                                            Si
                                            {!! Form::radio('posgrado', 'Si', true, ['class' => 'mr-7 ml-3']) !!}
                                            No
                                            {!! Form::radio('posgrado', 'No', false, ['class' => 'mr-7 ml-3']) !!}
                                        </span>
                                        <span class="col-span-2">
                                            <div class="grid grid-cols-5 gap-5 flex items-center">
                                                ¿Cuáles?:
                                                {!! Form::text('posgradotexto', '', ['class' => 'col-span-4']) !!}
                                            </div>
                                        </span>
                                    </div>
                                    {!! Form::submit('Siguiente', ['class' => 'bg-sky-500 hover:bg-sky-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white mt-5 ml-5']) !!}
                                    {!! Form::close() !!}
                                </div>
                                @break

                                @case(6)
                                <div>
                                    <h1 class="text-xl">
                                        VI. PARTICIPACIÓN SOCIAL DE LOS EGRESADOS
                                    </h1>

                                    {!! Form::open(['route' => ['egresado.form.modulo6'], 'method' => 'post', 'class' => 'mt-5']) !!}
                                    <div class="grid grid-cols-5 gap-5  flex items-center">
                                        <span class="col-span-2">VI.1  Pertenece a organizaciones sociales:</span>
                                        <span class="col-span-1">
                                            Si
                                            {!! Form::radio('org_sociales', 'Si', true, ['class' => 'mr-7 ml-3']) !!}
                                            No
                                            {!! Form::radio('org_sociales', 'No', false, ['class' => 'mr-7 ml-3']) !!}
                                        </span>
                                        <span class="col-span-2">
                                            <div class="grid grid-cols-5 gap-5 flex items-center">
                                                ¿Cuáles?:
                                                {!! Form::text('org_socialestexto', '', ['class' => 'col-span-4']) !!}
                                            </div>
                                        </span>
                                        <span class="col-span-2">VI.2  Pertenece a organismos de profesionistas:</span>
                                        <span class="col-span-1">
                                            Si
                                            {!! Form::radio('org_profesionales', 'Si', true, ['class' => 'mr-7 ml-3']) !!}
                                            No
                                            {!! Form::radio('org_profesionales', 'No', false, ['class' => 'mr-7 ml-3']) !!}
                                        </span>
                                        <span class="col-span-2">
                                            <div class="grid grid-cols-5 gap-5 flex items-center">
                                                ¿Cuáles?:
                                                {!! Form::text('org_profesionalestexto', '', ['class' => 'col-span-4']) !!}
                                            </div>
                                        </span>

                                        <span class="col-span-2">VI.3  Pertenece a la asociación de egresados:</span>
                                        <span class="col-span-1">
                                            Si
                                            {!! Form::radio('org_egresados', 'Si', true, ['class' => 'mr-7 ml-3']) !!}
                                            No
                                            {!! Form::radio('org_egresados', 'No', false, ['class' => 'mr-7 ml-3']) !!}
                                        </span>
                                    </div>
                                    {!! Form::submit('Siguiente', ['class' => 'bg-sky-500 hover:bg-sky-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white mt-5 ml-5']) !!}
                                    {!! Form::close() !!}
                                </div>
                                @break

                                @case(7)
                                <div>
                                    <h1 class="text-xl">
                                        VI.  COMENTARIOS Y SUGERENCIAS
                                    </h1>
                                    <h1 class="text-lg">Opinión o recomendación para mejorar la formación profesional de un egresado de su carrera.</h1>
                                    {!! Form::open(['route' => ['egresado.form.modulo7'], 'method' => 'post', 'class' => 'mt-5']) !!}
                                        {!! Form::textarea('comentarios', '', ['style' => 'resize: none', 'class' => 'w-full']) !!} <x-input-error :messages="$errors->get('comentarios')"/>
                                    {!! Form::submit('Finalizar formulario', ['class' => 'bg-sky-500 hover:bg-sky-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white mt-5 ml-5']) !!}
                                    {!! Form::close() !!}
                                </div>
                                @break

                                @default
                                <h1 class="text-xl">
                                    Ya ha contestado el formulario, le agradecemos su tiempo empleado.
                                </h1>
                            @endswitch
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
