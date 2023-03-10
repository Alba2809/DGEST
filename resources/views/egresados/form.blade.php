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
                                            Por favor lea cuidadosamente y conteste este cuestionario de la siguiente manera, seg??n sea el caso: <br>
                                            <br>
                                            <ol class="list-decimal ml-10">
                                                <li>
                                                    En el caso de preguntas cerradas, seleccione la que considere apropiada.
                                                </li>
                                                <li>
                                                    En las preguntas de valoraci??n se utiliza la escala del 1 al 5 en la que 1 es ???muy malo??? y 5 es ???muy bueno???.
                                                </li>
                                                <li>
                                                    En los casos de preguntas abiertas dejamos un campo de texto para que usted escriba con may??sculas una respuesta.
                                                </li>
                                                <li>
                                                    Al final anexamos un inciso para comentarios y sugerencias, le agradeceremos anote ah?? lo que considere prudente para mejorar nuestro sistema educativo o bien los temas que, a su juicio, omitimos en el cuestionario.
                                                </li>
                                                <li>
                                                    Cuando de clic en Siguiente se guardar??n los datos ingresos del modulo en que se encuentre, y no podr?? volver a ingresarlos, verifique los datos que ingres?? antes de dar clic en Siguiente.
                                                </li>
                                            </ol><br>
                                            Gracias por su gentil colaboraci??n.
                                        </p>
                                    </div>
                                    <div class="mt-10">
                                        <div>
                                            <h1 class="text-xl">I. PERFIL DEL EGRESADO</h1>
                                            {!! Form::open(['route' => ['egresado.form.modulo1'], 'method' => 'post', 'class' => 'grid grid-cols-4 gap-4']) !!}
                                                <label class="col-span-3">
                                                    Nombre:
                                                    {!! Form::text('Nombre', $egresado->nombre, ['disabled', 'placeholder' => 'Paterno Materno Nombre(s)', 'class' => 'disabled:opacity-75 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                                </label>
                                                <label>
                                                    No. de control:
                                                    {!! Form::text('NoControl', $egresado->no_control_egresado, ['disabled', 'class' => 'disabled:opacity-75 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                                </label>
                                                <label class="col-span-2">
                                                    Fecha de nacimiento:
                                                    {!! Form::text('FechaNac', $egresado->fecha_nac, ['disabled', 'class' => 'disabled:opacity-75 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                                </label>
                                                <label class="col-span-2">
                                                    CURP:
                                                    {!! Form::text('Curp', $egresado->curp, ['disabled', 'class' => 'disabled:opacity-75 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                                </label>
                                                <label class="col-span-2">
                                                    <span class="pr-10">Sexo:</span>
                                                    @if ($egresado->sexo == 0)
                                                        <span class="pr-3">Hombre</span>{!! Form::radio('Sexo', 'Hombre', true, ['disabled', 'class' => 'disabled:opacity-75 mr-7']) !!} 
                                                        <span class="pr-3">Mujer</span>{!! Form::radio('Sexo', 'Mujer', false, ['disabled', ]) !!} 
                                                    @else
                                                        <span class="pr-3">Hombre</span>{!! Form::radio('Sexo', 'Hombre', false, ['disabled', 'class' => 'disabled:opacity-75 mr-7']) !!}
                                                        <span class="pr-3">Mujer</span>{!! Form::radio('Sexo', 'Mujer', true, ['disabled', ]) !!}
                                                    @endif
                                                </label>
                                                <span class="col-span-2">
                                                    <span class="pr-10">Estado civil:</span>
                                                    <span class="pr-3"><label for="Soltero(a)">Soltero(a)</label></span>{!! Form::radio('EstadoCivil', 'Soltero', true, ['class' => 'mr-7', 'id' => 'Soltero(a)']) !!} 
                                                    <span class="pr-3"><label for="Casado(a)">Casado(a)</label></span>{!! Form::radio('EstadoCivil', 'Casado', false, ['class' => 'mr-7', 'id' => 'Casado(a)']) !!} 
                                                    <span><label for="OtroEstado">Otro</label></span>{!! Form::radio('EstadoCivil', 'Otro', false, ['class' => 'ml-3', 'id' => 'OtroEstado']) !!} 
                                                </span>

                                                <label class="col-span-4">
                                                    Domicilio:
                                                    {!! Form::text('Domicilio', '', ['placeholder' => ''.($errors->get('Domicilio') ? ''.implode(' | ',$errors->get('Domicilio')) : 'Calle No. Colonia C.P.'), 'class' => 'px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('Domicilio') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                                </label>
                                                <label class="col-span-2">
                                                    Ciudad: 
                                                    {!! Form::text('Ciudad', '', ['placeholder' => ''.($errors->get('Ciudad') ? ''.implode(' | ',$errors->get('Ciudad')) : ''), 'class' => 'px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('Ciudad') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                                </label>
                                                <label class="col-span-1">
                                                    Municipio: 
                                                    {!! Form::text('Municipio', '', ['placeholder' => ''.($errors->get('Municipio') ? ''.implode(' | ',$errors->get('Municipio')) : ''), 'class' => 'px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('Municipio') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                                </label>
                                                <label class="col-span-1">
                                                    Estado: 
                                                    {!! Form::text('Estado', '', ['placeholder' => ''.($errors->get('Estado') ? ''.implode(' | ',$errors->get('Estado')) : ''), 'class' => 'px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('Estado') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                                </label>
                                                <label class="col-span-1">
                                                    Telefono: 
                                                    {!! Form::number('Telefono', '', ['placeholder' => ''.($errors->get('Telefono') ? ''.implode(' | ',$errors->get('Telefono')) : ''), 'class' => 'px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('Telefono') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                                </label>
                                                <label class="col-span-1">
                                                    Telefono de casa:
                                                    {!! Form::number('TelefonoCasa', '', ['placeholder' => ''.($errors->get('TelefonoCasa') ? ''.implode(' | ',$errors->get('TelefonoCasa')) : ''), 'class' => 'px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('TelefonoCasa') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                                </label>
                                                <label class="col-span-2">
                                                    E-mail:
                                                    {!! Form::text('Email', $egresado->email, ['disabled', 'class' => 'disabled:opacity-75 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                                </label>
                                                <label class="col-span-4">
                                                    Carrera de Egreso y especialidad:
                                                    {!! Form::text('CarreraEspecialidad', $egresado->carrera.' - '.$egresado->especialidad, ['disabled', 'class' => 'disabled:opacity-75 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                                </label>
                                                <label class="col-span-2">
                                                    Mes y A??o de egreso:
                                                    {!! Form::text('MesAnio', $egresado->mes_egreso.' / '.$egresado->anio_egreso, ['disabled', 'class' => 'disabled:opacity-75 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                                </label>
                                                <label class="col-span-1">
                                                </label>
                                                <label class="col-span-1">
                                                    <span class="pr-2">Titulado(a):</span> <br>
                                                    <span class="pr-3"><label for="SiT">Si</label></span>{!! Form::radio('Titulado', 'Si', true, ['class' => 'mr-7', 'id' => 'SiT']) !!} 
                                                    <span class="pr-3"><label for="NoT">No</label></span>{!! Form::radio('Titulado', 'No', false, ['id' => 'NoT']) !!}
                                                </label>
                                                <span class="col-span-4">
                                                    Porcentaje de dominio de idioma extranjero:
                                                </span>
                                                <label class="col-span-2">
                                                    <span>Ingles</span> {!! Form::select('IdiomaIngles', ['10' => '10', '20' => '20', '30' => '30', '40' => '40', '50' => '50', '60' => '60', '70' => '70', '80' => '80', '90' => '90', '100' => '100'], '10', ['class' => 'ml-3 py-2.5 px-0 w-[25%] text-base text-black-800 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer']) !!}    
                                                </label>
                                                <label class="col-span-2 flex items-center">
                                                    Otro:
                                                    {!! Form::text('IdiomaOtro', '', ['placeholder' => ''.($errors->get('IdiomaOtro') ? ''.implode(' | ',$errors->get('IdiomaOtro')) : 'Nombre'), 'class' => 'ml-2 px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('IdiomaOtro') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                                    {!! Form::select('PorcentajeOtro', ['10' => '10', '20' => '20', '30' => '30', '40' => '40', '50' => '50', '60' => '60', '70' => '70', '80' => '80', '90' => '90', '100' => '100'], '10', ['class' => 'ml-3 py-2.5 px-0 w-[25%] text-base text-black-800 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer']) !!}    
                                                </label>
                                                <label class="col-span-4">
                                                    Manejo de paquetes computacionales:
                                                    {!! Form::text('ManejoPaquetes', '', ['placeholder' => ''.($errors->get('ManejoPaquetes') ? ''.implode(' | ',$errors->get('ManejoPaquetes')) : 'Especificar'), 'class' => 'px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('ManejoPaquetes') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                                </label>
                                                {!! Form::submit('Siguiente', ['class' => 'bg-sky-500 hover:bg-sky-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white mt-5 ml-5']) !!}
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                @break
                                @case(2)
                                <div>
                                    <h1 class="text-xl">II. PERTINENCIA Y DISPONIBILIDAD DE MEDIOS Y RECURSOS PARA EL APRENDIZAJE</h1>
                                    <h1 class="text-lg">Califique la calidad de la educaci??n profesional proporcionada por el personal docente, as?? como el Plan de Estudios de la carrera que curso y las condiciones del plantel en cuanto a infraestructura.</h1>
                                    {!! Form::open(['route' => ['egresado.form.modulo2'], 'method' => 'post', 'class' => 'grid grid-cols-4 gap-4 mt-5']) !!}
                                        <label class="pr-10 col-span-2">II.1  Calidad de los docentes: </label>
                                        <div class="col-span-2">
                                            <span class="pr-3"><label for="Muy buenaCalidad">Muy buena</label></span>{!! Form::radio('calidad_docentes', 'Muy buena', true, ['class' => 'mr-7', 'id' => 'Muy buenaCalidad']) !!}
                                            <span class="pr-3"><label for="BuenaCalidad">Buena</label></span>{!! Form::radio('calidad_docentes', 'Buena', false, ['class' => 'mr-7', 'id' => 'BuenaCalidad']) !!}
                                            <span class="pr-3"><label for="RegularCalidad">Regular</label></span>{!! Form::radio('calidad_docentes', 'Regular', false, ['class' => 'mr-7', 'id' => 'RegularCalidad']) !!}
                                            <span class="pr-3"><label for="MalaCalidad">Mala</label></span>{!! Form::radio('calidad_docentes', 'Mala', false, ['class' => 'mr-7', 'id' => 'MalaCalidad']) !!}
                                        </div>

                                        <label class="pr-10 col-span-2">II.2  Plan de Estudios: </label>
                                        <div class="col-span-2">
                                            <span class="pr-3"><label for="Muy buenaPlan">Muy buena</label></span>{!! Form::radio('plan_estudios', 'Muy buena', true, ['class' => 'mr-7', 'id' => 'Muy buenaPlan']) !!}
                                            <span class="pr-3"><label for="BuenaPlan">Buena</label></span>{!! Form::radio('plan_estudios', 'Buena', false, ['class' => 'mr-7', 'id' => 'BuenaPlan']) !!}
                                            <span class="pr-3"><label for="RegularPlan">Regular</label></span>{!! Form::radio('plan_estudios', 'Regular', false, ['class' => 'mr-7', 'id' => 'RegularPlan']) !!}
                                            <span class="pr-3"><label for="MalaPlan">Mala</label></span>{!! Form::radio('plan_estudios', 'Mala', false, ['class' => 'mr-7', 'id' => 'MalaPlan']) !!}
                                        </div>

                                        <label class="pr-10 col-span-2">II.3  Oportunidad de participar en proyectos de investigaci??n y desarrollo:</label>
                                        <div class="col-span-2">
                                            <span class="pr-3"><label for="Muy buenaOpor">Muy buena</label></span>{!! Form::radio('part_proyectos', 'Muy buena', true, ['class' => 'mr-7', 'id' => 'Muy buenaOpor']) !!}
                                            <span class="pr-3"><label for="BuenaOpor">Buena</label></span>{!! Form::radio('part_proyectos', 'Buena', false, ['class' => 'mr-7', 'id' => 'BuenaOpor']) !!}
                                            <span class="pr-3"><label for="RegularOpor">Regular</label></span>{!! Form::radio('part_proyectos', 'Regular', false, ['class' => 'mr-7', 'id' => 'RegularOpor']) !!}
                                            <span class="pr-3"><label for="MalaOpor">Mala</label></span>{!! Form::radio('part_proyectos', 'Mala', false, ['class' => 'mr-7', 'id' => 'MalaOpor']) !!}
                                        </div>

                                        <label class="pr-10 col-span-2">II.4   ??nfasis que se le prestaba a la investigaci??n dentro del proceso de ense??anza: </label>
                                        <div class="col-span-2">
                                            <span class="pr-3"><label for="Muy buenaEnf">Muy buena</label></span>{!! Form::radio('enfasis_investigacion', 'Muy buena', true, ['class' => 'mr-7', 'id' => 'Muy buenaEnf']) !!}
                                            <span class="pr-3"><label for="BuenaEnf">Buena</label></span>{!! Form::radio('enfasis_investigacion', 'Buena', false, ['class' => 'mr-7', 'id' => 'BuenaEnf']) !!}
                                            <span class="pr-3"><label for="RegularEnf">Regular</label></span>{!! Form::radio('enfasis_investigacion', 'Regular', false, ['class' => 'mr-7', 'id' => 'RegularEnf']) !!}
                                            <span class="pr-3"><label for="MalaEnf">Mala</label></span>{!! Form::radio('enfasis_investigacion', 'Mala', false, ['class' => 'mr-7', 'id' => 'MalaEnf']) !!}
                                        </div>
                                        
                                        <label class="pr-10 col-span-2">II.5  Satisfacci??n con las condiciones de estudio (infraestructura): </label>
                                        <div class="col-span-2">
                                            <span class="pr-3"><label for="Muy buenaSatis">Muy buena</label></span>{!! Form::radio('satisfaccion_cond', 'Muy buena', true, ['class' => 'mr-7', 'id' => 'Muy buenaSatis']) !!}
                                            <span class="pr-3"><label for="BuenaSatis">Buena</label></span>{!! Form::radio('satisfaccion_cond', 'Buena', false, ['class' => 'mr-7', 'id' => 'BuenaSatis']) !!}
                                            <span class="pr-3"><label for="RegularSatis">Regular</label></span>{!! Form::radio('satisfaccion_cond', 'Regular', false, ['class' => 'mr-7', 'id' => 'RegularSatis']) !!}
                                            <span class="pr-3"><label for="MalaSatis">Mala</label></span>{!! Form::radio('satisfaccion_cond', 'Mala', false, ['class' => 'mr-7', 'id' => 'MalaSatis']) !!}
                                        </div>
                                        
                                        <label class="pr-10 col-span-2">II.6  Experiencia obtenida a trav??s de la residencia profesional: </label>
                                        <div class="col-span-2">
                                            <span class="pr-3"><label for="Muy buenaExp">Muy buena</label></span>{!! Form::radio('experiencia_residencia', 'Muy buena', true, ['class' => 'mr-7', 'id' => 'Muy buenaExp']) !!}
                                            <span class="pr-3"><label for="BuenaExp">Buena</label></span>{!! Form::radio('experiencia_residencia', 'Buena', false, ['class' => 'mr-7', 'id' => 'BuenaExp']) !!}
                                            <span class="pr-3"><label for="RegularExp">Regular</label></span>{!! Form::radio('experiencia_residencia', 'Regular', false, ['class' => 'mr-7', 'id' => 'RegularExp']) !!}
                                            <span class="pr-3"><label for="MalaExp">Mala</label></span>{!! Form::radio('experiencia_residencia', 'Mala', false, ['class' => 'mr-7', 'id' => 'MalaExp']) !!}
                                        </div>
                                        {!! Form::submit('Siguiente', ['class' => 'bg-sky-500 hover:bg-sky-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white mt-5 ml-5']) !!}
                                    {!! Form::close() !!}
                                </div>
                                @break
                                @case(3)
                                <div>
                                    <h1 class="text-xl">III. UBICACI??N LABORAL DE LOS EGRESADOS</h1>
                                    <h1 class="text-lg">Indique a cu??l de los siguientes puntos corresponde su situaci??n actual.</h1>
                                    {!! Form::open(['route' => ['egresado.form.modulo3'], 'method' => 'post', 'class' => 'mt-5']) !!}
                                    <div class="grid grid-cols-4 gap-4">

                                        <label class="pr-10 col-span-4">III.1  Actividad a la que se dedica actualmente: </label> <x-input-error :messages="$errors->get('actividad')"/>
                                        <span class="col-span-1"><label for="actTrabaja">Trabaja</label>{!! Form::radio('actividad', 'Trabaja', false, ['class' => 'mr-7 ml-3', 'onclick' => 'actOpc()', 'id' => 'actTrabaja']) !!}</span>
                                        <span class="col-span-1"><label for="actEstudia">Estudia</label>{!! Form::radio('actividad', 'Estudia', false, ['class' => 'mr-7 ml-3', 'onclick' => 'actOpc()', 'id' => 'actEstudia']) !!}</span>
                                        <span class="col-span-1"><label for="actEstudiaTrabaja">Estudia y Trabaja</label>{!! Form::radio('actividad', 'Estudia y Trabaja', false, ['class' => 'mr-7 ml-3', 'onclick' => 'actOpc()', 'id' => 'actEstudiaTrabaja']) !!}</span>
                                        <span class="col-span-1"><label for="No estudia ni trabaja">No estudia ni trabaja</label>{!! Form::radio('actividad', 'No estudia ni trabaja', true, ['class' => 'mr-7 ml-3', 'onclick' => 'actOpc()', 'id' => 'No estudia ni trabaja']) !!}</span>
                                        
                                        <div id="estudiaopciones" class="col-span-4 hidden">
                                            <label class="pr-10 col-span-2">Si estudia, indicar si es:</label>
                                            <div class="col-span-4 grid grid-cols-6 gap-6">
                                                <span><label for="Especialidad">Especialidad</label>{!! Form::radio('estudia', 'Especialidad', true, ['class' => 'ml-3', 'onclick' => 'otratexto()', 'id' => 'Especialidad']) !!}</span>
                                                <span><label for="Maestr??a">Maestr??a</label>{!! Form::radio('estudia', 'Maestr??a', false, ['class' => 'ml-3', 'onclick' => 'otratexto()', 'id' => 'Maestr??a']) !!}</span>
                                                <span><label for="Doctorado">Doctorado</label>{!! Form::radio('estudia', 'Doctorado', false, ['class' => 'ml-3', 'onclick' => 'otratexto()', 'id' => 'Doctorado']) !!}</span>
                                                <span><label for="Idiomas">Idiomas</label>{!! Form::radio('estudia', 'Idiomas', false, ['class' => 'ml-3', 'onclick' => 'otratexto()', 'id' => 'Idiomas']) !!}</span>
                                                <span class="col-span-2 flex items-center"><label for="Otra">Otra</label>{!! Form::radio('estudia', 'Otra', false, ['class' => 'ml-3 mr-3', 'onclick' => 'otratexto()', 'id' => 'Otra']) !!}
                                                    {!! Form::text('OtraTexto', '', ['placeholder' => 'Especifique', 'class' => 'px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('OtraTexto') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'hidden border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500'), 'id' => 'OtraTexto']) !!}
                                                </span>
                                            </div>
                                            <div class="mt-3 grid grid-cols-6">
                                                <span class="flex items-center">
                                                    Especialidad e Instituci??n:
                                                </span>
                                                {!! Form::text('especialidad_inst', '', ['placeholder' => ''.($errors->get('especialidad_inst') ? ''.implode(' | ',$errors->get('especialidad_inst')) : ''), 'class' => 'col-span-5 px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('especialidad_inst') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!} 
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div id="trabajaopciones" class="grid grid-cols-4 gap-4 hidden">
                                        <br><label class="pr-10 col-span-4">III.2  En caso de trabajar: Tiempo Transcurrido para obtener el primer empleo: </label>
                                        <span class="col-span-1"><label for="Antes de Egresar">Antes de Egresar</label>{!! Form::radio('trabaja', 'Antes de Egresar', true, ['class' => 'mr-7 ml-3', 'id' => 'Antes de Egresar']) !!}</span>
                                        <span class="col-span-1"><label for="Menos de seis meses">Menos de seis meses</label>{!! Form::radio('trabaja', 'Menos de seis meses', false, ['class' => 'mr-7 ml-3', 'id' => 'Menos de seis meses']) !!}</span>
                                        <span class="col-span-1"><label for="Entre seis meses y un a??o">Entre seis meses y un a??o</label>{!! Form::radio('trabaja', 'Entre seis meses y un a??o', false, ['class' => 'mr-7 ml-3', 'id' => 'Entre seis meses y un a??o']) !!}</span>
                                        <span class="col-span-1"><label for="M??s de un a??o">M??s de un a??o</label>{!! Form::radio('trabaja', 'M??s de un a??o', false, ['class' => 'mr-7 ml-3', 'id' => 'M??s de un a??o']) !!}</span>
                                        
                                        <label class="pr-10 col-span-4">III.3  Medio para Obtener el Empleo:</label>
                                        <span class="col-span-1"><label for="Bolsa de trabajo">Bolsa de trabajo del plantel</label>{!! Form::radio('medio', 'Bolsa de trabajo del plantel', true, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()', 'id' => 'Bolsa de trabajo']) !!}</span>
                                        <span class="col-span-1"><label for="Contactos personales">Contactos personales</label>{!! Form::radio('medio', 'Contactos personales', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()', 'id' => 'Contactos personales']) !!}</span>
                                        <span class="col-span-2"><label for="Residencia Profesional">Residencia Profesional</label>{!! Form::radio('medio', 'Residencia Profesional', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()', 'id' => 'Residencia Profesional']) !!}</span>
                                        <div class="col-span-4">
                                            <div class="grid grid-cols-7 gap-7">
                                                <span class="col-span-2"><label for="Medios masivos">Medios masivos de comunicaci??n</label>{!! Form::radio('medio', 'Medios masivos de comunicaci??n', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()', 'id' => 'Medios masivos']) !!}</span>
                                                <span class="col-span-5 flex items-center"><label for="MedioOtro">Otro</label>{!! Form::radio('medio', 'Otra', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()', 'id' => 'MedioOtro']) !!}
                                                {!! Form::text('MedioTexto', '', ['placeholder' => 'Especifique', 'class' => 'px-3 py-2 bg-white border shadow-sm focus:outline-none block w-1/2 rounded-md sm:text-sm focus:ring-1 '.($errors->get('MedioTexto') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'hidden border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500'), 'id' => 'MedioTexto']) !!}</span>
                                            </div>
                                        </div>
                                        
                                        <label class="pr-10 col-span-4">III.4  Requisitos de contrataci??n:</label>
                                        <span class="col-span-1"><label for="Competencias laborales">Competencias laborales</label>{!! Form::radio('requisitos_contrato', 'Competencias laborales', true, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()', 'id' => 'Competencias laborales']) !!}</span>
                                        <span class="col-span-1"><label for="T??tulo Profesional">T??tulo Profesional</label>{!! Form::radio('requisitos_contrato', 'T??tulo Profesional', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()', 'id' => 'T??tulo Profesiona']) !!}</span>
                                        <span class="col-span-1"><label for="Examen de selecci??n">Examen de selecci??n</label>{!! Form::radio('requisitos_contrato', 'Examen de selecci??n', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()', 'id' => 'Examen de selecci??n']) !!}</span>
                                        <span class="col-span-1"><label for="Idioma Extranjero">Idioma Extranjero</label>{!! Form::radio('requisitos_contrato', 'Idioma Extranjero', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()', 'id' => 'Idioma Extranjero']) !!}</span>
                                        <div class="col-span-4">
                                            <div class="grid grid-cols-6 gap-6">
                                                <span class="col-span-3"><label for="Actitudes y habilidades">Actitudes y habilidades socio-comunicativas (principios y valores)</label>{!! Form::radio('requisitos_contrato', 'Actitudes y habilidades socio-comunicativas (principios y valores)', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()', 'id' => 'Actitudes y habilidades']) !!}</span>
                                                <span class="col-span-1"><label for="Ninguno">Ninguno</label>{!! Form::radio('requisitos_contrato', 'Ninguno', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()', 'id' => 'Ninguno']) !!}</span>
                                                <span class="col-span-2 flex items-center"><label for="RequisitoOtro">Otro</label>{!! Form::radio('requisitos_contrato', 'Otra', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()', 'id' => 'RequisitoOtro']) !!}
                                                {!! Form::text('RequisitoTexto', '', ['placeholder' => 'Especifique', 'class' => 'px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('RequisitoTexto') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'hidden border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500'), 'id' => 'RequisitoTexto']) !!}</span>
                                            </div>
                                        </div>
                                        
                                        <label class="pr-10 col-span-4">III.5  Idioma que utiliza en su trabajo:</label>
                                        <div class="col-span-4">
                                            <div class="grid grid-cols-6 gap-6">
                                                <span class="col-span-1"><label for="Ingl??s">Ingl??s</label>{!! Form::radio('idiomas', 'Ingl??s', true, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()', 'id' => 'Ingl??s']) !!}</span>
                                                <span class="col-span-1"><label for="Franc??s">Franc??s</label>{!! Form::radio('idiomas', 'Franc??s', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()', 'id' => 'Franc??s']) !!}</span>
                                                <span class="col-span-1"><label for="Alem??n">Alem??n</label>{!! Form::radio('idiomas', 'Alem??n', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()', 'id' => 'Alem??n']) !!}</span>
                                                <span class="col-span-1"><label for="Japon??s">Japon??s</label>{!! Form::radio('idiomas', 'Japon??s', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()', 'id' => 'Japon??s']) !!}</span>
                                                <span class="col-span-2 flex items-center"><label for="IdiomaOtro">Otro</label>{!! Form::radio('idiomas', 'Otra', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()', 'id' => 'IdiomaOtro']) !!}
                                                {!! Form::text('IdiomaTexto', '', ['placeholder' => 'Especifique', 'class' => 'px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('IdiomaTexto') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'hidden border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500'), 'id' => 'IdiomaTexto']) !!}</span>
                                            </div>
                                        </div>
                                        
                                        <label class="pr-10 col-span-4">III.6  En qu?? proporci??n utiliza en el desempe??o de sus actividades laborales cada una de las habilidades del idioma extranjero:</label>
                                        <span class="flex items-center">
                                            Hablar {!! Form::select('Hablar', ['10' => '10', '20' => '20', '30' => '30', '40' => '40', '50' => '50', '60' => '60', '70' => '70', '80' => '80', '90' => '90', '100' => '100'], '10', ['class' => 'ml-3 py-2.5 px-0 w-[25%] text-base text-black-800 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer']) !!}
                                        </span>
                                        <span class="flex items-center">
                                            Escribir {!! Form::select('Escribir', ['10' => '10', '20' => '20', '30' => '30', '40' => '40', '50' => '50', '60' => '60', '70' => '70', '80' => '80', '90' => '90', '100' => '100'], '10', ['class' => 'ml-3 py-2.5 px-0 w-[25%] text-base text-black-800 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer']) !!}
                                        </span>
                                        <span class="flex items-center">
                                            Leer {!! Form::select('Leer', ['10' => '10', '20' => '20', '30' => '30', '40' => '40', '50' => '50', '60' => '60', '70' => '70', '80' => '80', '90' => '90', '100' => '100'], '10', ['class' => 'ml-3 py-2.5 px-0 w-[25%] text-base text-black-800 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer']) !!}
                                        </span>
                                        <span class="flex items-center">
                                            Escuchar {!! Form::select('Escuchar', ['10' => '10', '20' => '20', '30' => '30', '40' => '40', '50' => '50', '60' => '60', '70' => '70', '80' => '80', '90' => '90', '100' => '100'], '10', ['class' => 'ml-3 py-2.5 px-0 w-[25%] text-base text-black-800 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer']) !!}
                                        </span>
                                        
                                        <label class="pr-10 col-span-4">III.7  Antig??edad en el empleo:</label>
                                        <div class="col-span-4">
                                            <div class="grid grid-cols-5 gap-5">
                                                <span><label for="Menos de un a??o">Menos de un a??o</label>{!! Form::radio('antiguedad', 'Menos de un a??o', true, ['class' => 'mr-7 ml-3', 'id' => 'Menos de un a??o']) !!}</span>
                                                <span><label for="Un a??o">Un a??o</label>{!! Form::radio('antiguedad', 'Un a??o', false, ['class' => 'mr-7 ml-3', 'id' => 'Un a??o']) !!}</span>
                                                <span><label for="Dos a??os">Dos a??os</label>{!! Form::radio('antiguedad', 'Dos a??os', false, ['class' => 'mr-7 ml-3', 'id' => 'Dos a??os']) !!}</span>
                                                <span><label for="Tres A??os">Tres A??os</label>{!! Form::radio('antiguedad', 'Tres A??os', false, ['class' => 'mr-7 ml-3', 'id' => 'Tres A??os']) !!}</span>
                                                <span><label for="M??s de tres a??os">M??s de tres a??os</label>{!! Form::radio('antiguedad', 'M??s de tres a??os', false, ['class' => 'mr-7 ml-3', 'id' => 'M??s de tres a??os']) !!}</span>
                                            </div>
                                        </div>
                                        
                                        <span class="col-span-4">A??o de ingreso {!! Form::select('anio_egreso', ['2023' => '2023','2022' => '2022','2021' => '2021','2020' => '2020','2019' => '2019','2018' => '2018','2017' => '2017','2016' => '2016','2015' => '2015'], '2023', ['class' => 'ml-3 py-2.5 px-0 w-[10%] text-base text-black-800 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer']) !!}</span>
                                        
                                        <label class="pr-10 col-span-4">III.8  Ingreso (salario m??nimo diario):</label>
                                        <span><label for="Menos de cinco">Menos de cinco</label>{!! Form::radio('salario_minimo', 'Menos de cinco', true, ['id' => 'Menos de cinco','class' => 'mr-7 ml-3']) !!}</span>
                                        <span><label for="Entre cinco y siete">Entre cinco y siete</label>{!! Form::radio('salario_minimo', 'Entre cinco y siete', false, ['id' => 'Entre cinco y siete','class' => 'mr-7 ml-3']) !!}</span>
                                        <span><label for="Entre 8 y 10">Entre 8 y 10</label>{!! Form::radio('salario_minimo', 'Entre 8 y 10', false, ['class' => 'mr-7 ml-3', 'id' => 'Entre 8 y 10']) !!}</span>
                                        <span><label for="M??s de 10">M??s de 10</label>{!! Form::radio('salario_minimo', 'M??s de 10', false, ['class' => 'mr-7 ml-3', 'id' => 'M??s de 10']) !!}</span>

                                        <label class="pr-10 col-span-4">III.9  Nivel jer??rquico en el trabajo:</label>
                                        <div class="col-span-4">
                                            <div class="grid grid-cols-6 gap-6">
                                                <span><label for="T??cnico">T??cnico</label>{!! Form::radio('nivel_jerarquico', 'T??cnico', true, ['id' => 'T??cnico', 'class' => 'mr-7 ml-3']) !!}</span>
                                                <span><label for="Supervisor">Supervisor</label>{!! Form::radio('nivel_jerarquico', 'Supervisor', false, ['id' => 'Supervisor','class' => 'mr-7 ml-3']) !!}</span>
                                                <span><label for="Jefe de ??rea">Jefe de ??rea</label>{!! Form::radio('nivel_jerarquico', 'Jefe de ??rea', false, ['id' => 'Jefe de ??rea','class' => 'mr-7 ml-3']) !!}</span>
                                                <span><label for="Funcionario">Funcionario</label>{!! Form::radio('nivel_jerarquico', 'Funcionario', false, ['id' => 'Funcionario','class' => 'mr-7 ml-3']) !!}</span>
                                                <span><label for="Directivo">Directivo</label>{!! Form::radio('nivel_jerarquico', 'Directivo', false, ['id' => 'Directivo','class' => 'mr-7 ml-3']) !!}</span>
                                                <span><label for="Empresario">Empresario</label>{!! Form::radio('nivel_jerarquico', 'Empresario', false, ['id' => 'Empresario','class' => 'mr-7 ml-3']) !!}</span>
                                            </div>
                                        </div>

                                        <label class="pr-10 col-span-4">III.10  Condici??n de Trabajo:</label>
                                        <div class="col-span-4">
                                            <div class="grid grid-cols-5">
                                                <span class="col-span-1"><label for="Base">Base</label>{!! Form::radio('condicion_trabajo', 'Base', true, ['id' => 'Base', 'class' => 'mr-7 ml-3', 'onclick' => 'otratexto()']) !!}</span>
                                                <span class="col-span-1"><label for="Eventual">Eventual</label>{!! Form::radio('condicion_trabajo', 'Eventual', false, ['id' => 'Eventual', 'class' => 'mr-7 ml-3', 'onclick' => 'otratexto()']) !!}</span>
                                                <span class="col-span-1"><label for="Contrato">Contrato</label>{!! Form::radio('condicion_trabajo', 'Contrato', false, ['id' => 'Contrato', 'class' => 'mr-7 ml-3', 'onclick' => 'otratexto()']) !!}</span>
                                                <span class="col-span-2 flex items-center"><label for="CondicionOtro">Otros</label>{!! Form::radio('condicion_trabajo', 'Otra', false, ['class' => 'mr-7 ml-3', 'onclick' => 'otratexto()', 'id' => 'CondicionOtro']) !!}
                                                {!! Form::text('CondicionTexto', '', ['placeholder' => 'Especifique', 'class' => 'px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('CondicionTexto') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'hidden border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500'), 'id' => 'CondicionTexto']) !!}</span>
                                            </div>
                                        </div>
                                        
                                        <label class="col-span-4">III.11  Relaci??n del trabajo con su ??rea de formaci??n:</label>
                                        <div class="col-span-4">
                                            <div class="grid grid-cols-6 gap-6">
                                                <div>
                                                    <label for="0%">0%</label>
                                                    <span>{!! Form::radio('relacion_area', '0', true, ['class' => 'ml-3 ', 'id' => '0%']) !!}</span>
                                                </div>
                                                <div>
                                                    <label for="20%">20%</label>
                                                    <span>{!! Form::radio('relacion_area', '20', false, ['class' => 'ml-3 ', 'id' => '20%']) !!}</span>
                                                </div>
                                                <div>
                                                    <label for="40%">40%</label>
                                                    <span>{!! Form::radio('relacion_area', '40', false, ['class' => 'ml-3 ', 'id' => '40%']) !!}</span>
                                                </div>
                                                <div>
                                                    <label for="60%">60%</label>
                                                    <span>{!! Form::radio('relacion_area', '60', false, ['class' => 'ml-3 ', 'id' => '60%']) !!}</span>
                                                </div>
                                                <div>
                                                    <label for="80%">80%</label>
                                                    <span>{!! Form::radio('relacion_area', '80', false, ['class' => 'ml-3 ', 'id' => '80%']) !!}</span>
                                                </div>
                                                <div>
                                                    <label for="100%">100%</label>
                                                    <span>{!! Form::radio('relacion_area', '100', false, ['class' => 'ml-3 ', 'id' => '100%']) !!}</span>
                                                </div>
                                            </div>
                                        </div>

                                        <label class="pr-10 col-span-4">III.12  Datos de la empresa u organismo:</label>
                                        <span>ORGANISMO:</span>
                                        <span class="col-span-1"><label for="P??blico">P??blico</label>{!! Form::radio('organismo', 'P??blico', true, ['class' => 'mr-7 ml-3', 'id' => 'P??blico']) !!}</span>
                                        <span class="col-span-1"><label for="Privado">Privado</label>{!! Form::radio('organismo', 'Privado', false, ['class' => 'mr-7 ml-3', 'id' => 'Privado']) !!}</span>
                                        <span class="col-span-1"><label for="Social">Social</label>{!! Form::radio('organismo', 'Social', false, ['class' => 'mr-7 ml-3', 'id' => 'Social']) !!}</span>
                                        
                                        <div class="col-span-4 flex items-center">
                                            <span class="w-1/2">Giro o actividad principal de la empresa u organismo:</span>
                                            {!! Form::text('giro', '', ['placeholder' => ''.($errors->get('giro') ? ''.implode(' | ',$errors->get('giro')) : ''), 'class' => 'px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('giro') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                        </div>
                                        <div class="col-span-4 flex items-center">
                                            <span class="w-[10%]">Raz??n Social:</span>
                                            {!! Form::text('razon_social', '', ['placeholder' => ''.($errors->get('razon_social') ? ''.implode(' | ',$errors->get('razon_social')) : ''), 'class' => 'px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('razon_social') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                        </div>
                                        
                                        <span class="col-span-4 flex items-center">Domicilio:
                                        {!! Form::text('domicilio', '', ['placeholder' => ''.($errors->get('domicilio') ? ''.implode(' | ',$errors->get('domicilio')) : 'Calle N??mero Colonia C.P.'), 'class' => 'ml-3 px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('domicilio') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}</span>
                                        
                                        <div class="col-span-4">
                                            <div class="grid grid-cols-3">
                                                <span class="col-span-1 flex items-center">Ciudad:
                                                {!! Form::text('ciudad', '', ['placeholder' => ''.($errors->get('ciudad') ? ''.implode(' | ',$errors->get('ciudad')) : ''), 'class' => 'ml-3 px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('ciudad') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}</span>
                                                
                                                <span class="col-span-1 flex items-center ml-5">Municipio:
                                                {!! Form::text('municipio', '', ['placeholder' => ''.($errors->get('municipio') ? ''.implode(' | ',$errors->get('municipio')) : ''), 'class' => 'ml-3 px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('municipio') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}</span>
                                                
                                                <span class="col-span-1 flex items-center ml-5">Estado:
                                                {!! Form::text('estado', '', ['placeholder' => ''.($errors->get('estado') ? ''.implode(' | ',$errors->get('estado')) : ''), 'class' => 'ml-3 px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('estado') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}</span>
                                            </div>
                                        </div>
                                        
                                        <span class="col-span-1 self-center items-center">Contactos:</span>
                                        <span class="col-span-1">{!! Form::number('telefono', '', ['placeholder' => ''.($errors->get('estelefonotado') ? ''.implode(' | ',$errors->get('estelefonotado')) : 'Telefono'), 'class' => 'px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('telefono') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}</span>
                                        <span class="col-span-1">{!! Form::number('fax', '', ['placeholder' => ''.($errors->get('fax') ? ''.implode(' | ',$errors->get('fax')) : 'Fax'), 'class' => 'px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('fax') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}</span>
                                        <span class="col-span-1">{!! Form::text('email', '', ['placeholder' => ''.($errors->get('email') ? ''.implode(' | ',$errors->get('email')) : 'Ej. jhon@gmail.com'), 'class' => 'px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('email') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}</span>
                                        
                                        <span class="col-span-4 flex items-center"><span class="w-[10%]">P??gina Web:</span>
                                        {!! Form::text('pagina_web', '', ['placeholder' => ''.($errors->get('pagina_web') ? ''.implode(' | ',$errors->get('pagina_web')) : ''), 'class' => 'px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('pagina_web') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}</span>
                                        
                                        <span class="col-span-4 flex items-center"><span class="w-[30%]">Nombre y Puesto del Jefe Inmediato:</span>
                                        {!! Form::text('jefe', '', ['placeholder' => ''.($errors->get('jefe') ? ''.implode(' | ',$errors->get('jefe')) : 'Ej. CMO Juan Hernandez Perez'), 'class' => 'px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('jefe') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}</span>
    
                                        <label class="pr-10 col-span-4">III.13  Sector Econ??mico de la Empresa u Organizaci??n:</label>
                                        <span class="col-span-4">SECTOR PRIMARIO:</span>
                                        <span class="col-span-1"><label for="Agroindustria">Agroindustria</label>{!! Form::radio('sector_primario', 'Agroindustria', true, ['class' => 'mr-7 ml-3', 'id' => 'Agroindustria']) !!}</span>
                                        <span class="col-span-1"><label for="Pesquero">Pesquero</label>{!! Form::radio('sector_primario', 'Pesquero', false, ['class' => 'mr-7 ml-3', 'id' => 'Pesquero']) !!}</span>
                                        <span class="col-span-1"><label for="Minero">Minero</label>{!! Form::radio('sector_primario', 'Minero', false, ['class' => 'mr-7 ml-3', 'id' => 'Minero']) !!}</span>
                                        <span class="col-span-1"><label for="OtrosPrimario">Otros</label>{!! Form::radio('sector_primario', 'Otros', false, ['class' => 'mr-7 ml-3', 'id' => 'OtrosPrimario']) !!}</span>
                                        
                                        <span class="col-span-4">SECTOR SECUNDARIO:</span>
                                        <span class="col-span-1"><label for="Industrial">Industrial</label>{!! Form::radio('sector_secundario', 'Industrial', true, ['class' => 'mr-7 ml-3', 'id' => 'Industrial']) !!}</span>
                                        <span class="col-span-1"><label for="Construcci??n">Construcci??n</label>{!! Form::radio('sector_secundario', 'Construcci??n', false, ['class' => 'mr-7 ml-3', 'id' => 'Construcci??n']) !!}</span>
                                        <span class="col-span-1"><label for="Petrolero">Petrolero</label>{!! Form::radio('sector_secundario', 'Petrolero', false, ['class' => 'mr-7 ml-3', 'id' => 'Petrolero']) !!}</span>
                                        <span class="col-span-1"><label for="OtrosSecuendario">Otros</label>{!! Form::radio('sector_secundario', 'Otros', false, ['class' => 'mr-7 ml-3', 'id' => 'OtrosSecuendario']) !!}</span>
                                        
                                        <span class="col-span-4">SECTOR TERCIARIO:</span>
                                        <span class="col-span-1"><label for="Educativo">Educativo</label>{!! Form::radio('sector_terciario', 'Educativo', true, ['class' => 'mr-7 ml-3', 'id' => 'Educativo']) !!}</span>
                                        <span class="col-span-1"><label for="Turismo">Turismo</label>{!! Form::radio('sector_terciario', 'Turismo', false, ['class' => 'mr-7 ml-3', 'id' => 'Turismo']) !!}</span>
                                        <span class="col-span-1"><label for="Comercio">Comercio</label>{!! Form::radio('sector_terciario', 'Comercio', false, ['class' => 'mr-7 ml-3', 'id' => 'Comercio']) !!}</span>
                                        <span class="col-span-1"><label for="Servicios Financieros">Servicios Financieros</label>{!! Form::radio('sector_terciario', 'Servicios Financieros', false, ['class' => 'mr-7 ml-3', 'id' => 'Servicios Financieros']) !!}</span>
                                        <span class="col-span-1"><label for="OtrosTerciario">Otros</label>{!! Form::radio('sector_terciario', 'Otros', false, ['class' => 'mr-7 ml-3', 'id' => 'OtrosTerciario']) !!}</span>
                                        
                                        <label class="pr-10 col-span-4">III.14  Tama??o de la empresa u organizaci??n:</label>
                                        <span class="col-span-1"><label for="Microempresa">Microempresa (1-30)</label>{!! Form::radio('tamanio_empresa', 'Microempresa (1-30)', true, ['class' => 'mr-7 ml-3', 'id' => 'Microempresa']) !!}</span>
                                        <span class="col-span-1"><label for="Peque??a">Peque??a (31-100)</label>{!! Form::radio('tamanio_empresa', 'Peque??a (31-100)', false, ['class' => 'mr-7 ml-3', 'id' => 'Peque??a']) !!}</span>
                                        <span class="col-span-1"><label for="Mediana">Mediana (101-500)</label>{!! Form::radio('tamanio_empresa', 'Mediana (101-500)', false, ['class' => 'mr-7 ml-3', 'id' => 'Mediana']) !!}</span>
                                        <span class="col-span-1"><label for="Grande">Grande (m??s de 500)</label>{!! Form::radio('tamanio_empresa', 'Grande (m??s de 500)', false, ['class' => 'mr-7 ml-3', 'id' => 'Grande']) !!}</span>
                                    </div>
                                    {!! Form::submit('Siguiente', ['class' => 'bg-sky-500 hover:bg-sky-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white mt-5 mb-5 ml-5']) !!}
                                    {!! Form::close() !!}
                                </div>
                                @break

                                @case(4)
                                <div>
                                    <h1 class="text-xl">
                                        IV. DESEMPE??O PROFESIONAL DE LOS EGRESADOS
                                        <span class="text-base">(COHERENCIA ENTRE LA FORMACI??N Y EL TIPO DE EMPLEO)</span>
                                    </h1>
                                    <h1 class="text-lg">Marcar los campos que correspondan a su trayectoria profesional.</h1>

                                    {!! Form::open(['route' => ['egresado.form.modulo4'], 'method' => 'post', 'class' => 'mt-5']) !!}
                                    <div class="grid grid-cols-4 gap-4">
                                        <label class="pr-10 col-span-4">IV.1  Eficiencia para realizar las actividades laborales, en relaci??n con su formaci??n acad??mica: </label>
                                        <span class="col-span-1"><label for="Muy eficiente">Muy eficiente</label>{!! Form::radio('eficiencia', 'Muy eficiente', true, ['class' => 'mr-7 ml-3', 'id' => 'Muy eficiente']) !!}</span>
                                        <span class="col-span-1"><label for="Eficiente">Eficiente</label>{!! Form::radio('eficiencia', 'Eficiente', false, ['class' => 'mr-7 ml-3', 'id' => 'Eficiente']) !!}</span>
                                        <span class="col-span-1"><label for="Poco eficiente">Poco eficiente</label>{!! Form::radio('eficiencia', 'Poco eficiente', false, ['class' => 'mr-7 ml-3', 'id' => 'Poco eficiente']) !!}</span>
                                        <span class="col-span-1"><label for="Deficiente">Deficiente</label>{!! Form::radio('eficiencia', 'Deficiente', false, ['class' => 'mr-7 ml-3', 'id' => 'Deficiente']) !!}</span>
                                        
                                        <label class="pr-10 col-span-4">IV.2  C??mo califica su formaci??n acad??mica con respecto a su desempe??o laboral:</label>
                                        <div class="col-span-4">
                                            <div class="grid grid-cols-5 gap-5">
                                                <span><label for="Excelente1">Excelente</label>{!! Form::radio('formacion_academica', 'Excelente', true, ['class' => 'mr-7 ml-3', 'id' => 'Excelente1']) !!}</span>
                                                <span><label for="Bueno1">Bueno</label>{!! Form::radio('formacion_academica', 'Bueno', false, ['class' => 'mr-7 ml-3', 'id' => 'Bueno1']) !!}</span>
                                                <span><label for="Regular1">Regular</label>{!! Form::radio('formacion_academica', 'Regular', false, ['class' => 'mr-7 ml-3', 'id' => 'Regular1']) !!}</span>
                                                <span><label for="Malo1">Malo</label>{!! Form::radio('formacion_academica', 'Malo', false, ['class' => 'mr-7 ml-3', 'id' => 'Malo1']) !!}</span>
                                                <span><label for="P??simo1">P??simo</label>{!! Form::radio('formacion_academica', 'P??simo', false, ['class' => 'mr-7 ml-3', 'id' => 'P??simo1']) !!}</span>
                                            </div>
                                        </div>
                                        
                                        <label class="pr-10 col-span-4">IV.3  Utilidad de las residencias profesionales o pr??cticas profesionales para su desarrollo laboral y profesional:</label>
                                        <div class="col-span-4">
                                            <div class="grid grid-cols-5 gap-5">
                                                <span><label for="Excelente2">Excelente</label>{!! Form::radio('utilidad_residencias', 'Excelente', true, ['class' => 'mr-7 ml-3', 'id' => 'Excelente2']) !!}</span>
                                                <span><label for="Bueno2">Bueno</label>{!! Form::radio('utilidad_residencias', 'Bueno', false, ['class' => 'mr-7 ml-3', 'id' => 'Bueno2']) !!}</span>
                                                <span><label for="Regular2">Regular</label>{!! Form::radio('utilidad_residencias', 'Regular', false, ['class' => 'mr-7 ml-3', 'id' => 'Regular2']) !!}</span>
                                                <span><label for="Malo2">Malo</label>{!! Form::radio('utilidad_residencias', 'Malo', false, ['class' => 'mr-7 ml-3', 'id' => 'Malo2']) !!}</span>
                                                <span><label for="P??simo2">P??simo</label>{!! Form::radio('utilidad_residencias', 'P??simo', false, ['class' => 'mr-7 ml-3', 'id' => 'P??simo2']) !!}</span>
                                            </div>
                                        </div>

                                        <label class="pr-10 col-span-4">IV.4  Aspectos que valora la empresa u organismo para la contrataci??n de egresados:</label>
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
                                    <div class="divide-y divide-slate-200">
                                        <div class="grid grid-cols-4 gap-4">
                                            <span class="col-span-3 h-10 flex items-center">1. ??rea o Campo de Estudio</span>
                                            <div class="grid grid-cols-5 gap-5">
                                                {!! Form::radio('campo', '1', true, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('campo', '2', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('campo', '3', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('campo', '4', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('campo', '5', false, ['class' => 'place-self-center']) !!}
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-4 gap-4">
                                            <span class="col-span-3 h-10 flex items-center">2. Titulaci??n</span>
                                            <div class="grid grid-cols-5 gap-5">
                                                {!! Form::radio('titulacion', '1', true, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('titulacion', '2', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('titulacion', '3', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('titulacion', '4', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('titulacion', '5', false, ['class' => 'place-self-center']) !!}
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-4 gap-4">
                                            <span class="col-span-3 h-10 flex items-center">3. Experiencia Laboral/pr??ctica (antes de egresar)</span>
                                            <div class="grid grid-cols-5 gap-5">
                                                {!! Form::radio('experiencia_laboral', '1', true, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('experiencia_laboral', '2', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('experiencia_laboral', '3', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('experiencia_laboral', '4', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('experiencia_laboral', '5', false, ['class' => 'place-self-center']) !!}
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-4 gap-4">
                                            <span class="col-span-3 h-20 flex items-center">4. Competencia Laboral: Habilidad para resolver problemas, capacidad de an??lisis, habilidad para el aprendizaje, creatividad, administraci??n del tiempo, capacidad de negociaci??n, habilidades manuales, trabajo en equipo, iniciativa, honestidad, persistencia, etc.</span>
                                            <div class="grid grid-cols-5 gap-5">
                                                {!! Form::radio('competencia_laboral', '1', true, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('competencia_laboral', '2', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('competencia_laboral', '3', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('competencia_laboral', '4', false, ['class' => 'place-self-center']) !!}
                                                {!! Form::radio('competencia_laboral', '5', false, ['class' => 'place-self-center']) !!}
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-4 gap-4">
                                            <span class="col-span-3 h-10 flex items-center">5. Posicionamiento de la Instituci??n de Egreso.</span>
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
                                            <span class="col-span-3 h-10 flex items-center">10. Otros 
                                                {!! Form::text('AspectoTexto', '', ['placeholder' => ''.($errors->get('AspectoTexto') ? ''.implode(' | ',$errors->get('AspectoTexto')) : ''), 'class' => 'ml-3 px-3 py-2 bg-white border shadow-sm focus:outline-none block w-1/2 rounded-md sm:text-sm focus:ring-1 '.($errors->get('AspectoTexto') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
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
                                        V. EXPECTATIVAS DE DESARROLLO, SUPERACI??N PROFESIONAL Y DE ACTUALIZACI??N
                                    </h1>

                                    {!! Form::open(['route' => ['egresado.form.modulo5'], 'method' => 'post', 'class' => 'mt-5']) !!}
                                    <div class="grid grid-cols-5 gap-5  flex items-center">
                                        <label class="pr-10 col-span-5">V.1  ACTUALIZACI??N DE CONOCIMIENTOS:</label>
                                        <span class="col-span-2">Le gustar??a tomar cursos de actualizaci??n:</span>
                                        <span class="col-span-1">
                                            <label for="Si1">Si</label>
                                            {!! Form::radio('actualizacion', 'Si', true, ['class' => 'mr-7 ml-3', 'id' => 'Si1']) !!}
                                            <label for="No1">No</label>
                                            {!! Form::radio('actualizacion', 'No', false, ['class' => 'mr-7 ml-3', 'id' => 'No1']) !!}
                                        </span>
                                        <span class="col-span-2">
                                            <div class="grid grid-cols-5 gap-5 flex items-center">
                                                ??Cu??les?:
                                                {!! Form::text('actualizaciontexto', '', ['placeholder' => ''.($errors->get('actualizaciontexto') ? ''.implode(' | ',$errors->get('actualizaciontexto')) : ''), 'class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('actualizaciontexto') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                            </div>
                                        </span>

                                        <span class="col-span-2">Le gustar??a tomar alg??n Posgrado:</span>
                                        <span class="col-span-1">
                                            <label for="Si2">Si</label>
                                            {!! Form::radio('posgrado', 'Si', true, ['class' => 'mr-7 ml-3', 'id' => 'Si2']) !!}
                                            <label for="No2">No</label>
                                            {!! Form::radio('posgrado', 'No', false, ['class' => 'mr-7 ml-3', 'id' => 'No2']) !!}
                                        </span>
                                        <span class="col-span-2">
                                            <div class="grid grid-cols-5 gap-5 flex items-center">
                                                ??Cu??les?:
                                                {!! Form::text('posgradotexto', '', ['placeholder' => ''.($errors->get('posgradotexto') ? ''.implode(' | ',$errors->get('posgradotexto')) : ''), 'class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('posgradotexto') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
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
                                        VI. PARTICIPACI??N SOCIAL DE LOS EGRESADOS
                                    </h1>

                                    {!! Form::open(['route' => ['egresado.form.modulo6'], 'method' => 'post', 'class' => 'mt-5']) !!}
                                    <div class="grid grid-cols-5 gap-5  flex items-center">
                                        <span class="col-span-2">VI.1  Pertenece a organizaciones sociales:</span>
                                        <span class="col-span-1">
                                            <label for="Si3">Si</label>
                                            {!! Form::radio('org_sociales', 'Si', true, ['class' => 'mr-7 ml-3', 'id' => 'Si3']) !!}
                                            <label for="No3">No</label>
                                            {!! Form::radio('org_sociales', 'No', false, ['class' => 'mr-7 ml-3', 'id' => 'No3']) !!}
                                        </span>
                                        <span class="col-span-2">
                                            <div class="grid grid-cols-5 gap-5 flex items-center">
                                                ??Cu??les?:
                                                {!! Form::text('org_socialestexto', '', ['placeholder' => ''.($errors->get('org_socialestexto') ? ''.implode(' | ',$errors->get('org_socialestexto')) : ''), 'class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('org_socialestexto') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                            </div>
                                        </span>
                                        <span class="col-span-2">VI.2  Pertenece a organismos de profesionistas:</span>
                                        <span class="col-span-1">
                                            <label for="Si4">Si</label>
                                            {!! Form::radio('org_profesionales', 'Si', true, ['class' => 'mr-7 ml-3', 'id' => 'Si4']) !!}
                                            <label for="No4">No</label>
                                            {!! Form::radio('org_profesionales', 'No', false, ['class' => 'mr-7 ml-3', 'id' => 'No4']) !!}
                                        </span>
                                        <span class="col-span-2">
                                            <div class="grid grid-cols-5 gap-5 flex items-center">
                                                ??Cu??les?:
                                                {!! Form::text('org_profesionalestexto', '', ['placeholder' => ''.($errors->get('org_profesionalestexto') ? ''.implode(' | ',$errors->get('org_profesionalestexto')) : ''), 'class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('org_profesionalestexto') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                            </div>
                                        </span>

                                        <span class="col-span-2">VI.3  Pertenece a la asociaci??n de egresados:</span>
                                        <span class="col-span-1">
                                            <label for="Si5">Si</label>
                                            {!! Form::radio('org_egresados', 'Si', true, ['class' => 'mr-7 ml-3', 'id' => 'Si5']) !!}
                                            <label for="No5">No</label>
                                            {!! Form::radio('org_egresados', 'No', false, ['class' => 'mr-7 ml-3', 'id' => 'No5']) !!}
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
                                    <h1 class="text-lg">Opini??n o recomendaci??n para mejorar la formaci??n profesional de un egresado de su carrera.</h1>
                                    {!! Form::open(['route' => ['egresado.form.modulo7'], 'method' => 'post', 'class' => 'mt-5']) !!}
                                        {!! Form::textarea('comentarios', '', ['placeholder' => 'Escriba sus comentarios y sugerencias aqu??...', 'class' => 'block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 resize-none']) !!} <x-input-error :messages="$errors->get('comentarios')"/>
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
