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
    
    function otraTexto() {
        if (document.getElementById('OtraActividad').checked) {
            document.getElementById('ActividadTexto').classList.remove("hidden");
        }
        else document.getElementById('ActividadTexto').classList.add("hidden");
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
                        @if ($modulo == 'd')
                            <h1 class="text-xl">
                                Ya ha contestado el formulario, le agradecemos su tiempo empleado.
                            </h1>
                        @else
                            @switch($modulo)
                                @case('a')
                                    <div class="divide-y-4 divide-slate-400/25">
                                        <div class="mb-5">
                                            <h1 class="text-2xl">Instrucciones</h1>
                                            <p class="text-lg">
                                                Por favor lea cuidadosamente y conteste este cuestionario de la siguiente manera, según sea el caso: <br>
                                                <br>
                                                <ol class="list-decimal ml-10 text-lg">
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
                                            </p>
                                            <span class="text-lg">
                                                Gracias por su gentil colaboración.
                                            </span>
                                        </div>
                                        <div> <br>
                                            <span class="text-2xl">Instituto Tecnológico Superior de Xalapa</span> <br> <br>
                                            <p class="text-lg text-justify">
                                                Fecha: {{$fecha_actual->day}} de {{$fecha_actual->monthName}} del {{$fecha_actual->year}} <br> <br>
                                                Estimado empresario: <br> <br>
                                                El Seguimiento de Egresados es "el conjunto de acciones realizadas” por la institución tendientes a mantener una comunicación constante con los sectores de empleadores, con el propósito de conocer la pertinencia y la formación obtenida por nuestros egresados en su formación académica y su competencia laboral, para que a partir de ello se instrumenten las estrategias de mejora continua. <br> <br>
                                                Por lo antes expuesto agradecemos de antemano su valioso apoyo al respecto y le solicitamos de la manera más atenta, tenga a bien contestar el cuestionario adjunto, lo que nos permitirá retroalimentar la pertinencia de las carreras que se ofrecen y coadyuvar a constituir una estrategia que logre, con base en la situación laboral de los egresados adecuar los planes y programas de estudio que ofertamos. <br> <br>
                                                La información que nos proporcione será estrictamente confidencial y con fines únicamente estadísticos. <br> <br>
                                                Con nuestro agradecimiento por su amable cooperación, reciba un cordial saludo.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mt-10">
                                        <div>
                                            <h1 class="text-xl">A. DATOS GENERALES DE LA EMPRESA U ORGANISMO</h1>
                                            {!! Form::open(['route' => ['empresa.form.moduloa'], 'method' => 'post']) !!}
                                                <div class="grid grid-cols-4 gap-4">
                                                    <span class="col-span-4 grid grid-cols-4 gap-4 flex place-items-center">
                                                        <strong>1 Nombre Comercial de la Empresa:</strong> <x-input-error :messages="$errors->get('nombre')"/>
                                                        {!! Form::text('nombre', '', ['class' => 'col-span-3 w-full px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                                    </span>
                                                    <span class="col-span-4 flex place-items-center">
                                                        Domicilio:
                                                        {!! Form::text('domicilio', $datos_egresado->domicilio, ['placeholder' => 'Calle No. Colonia C.P', 'class' => 'w-full ml-5 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                                    </span>

                                                    <div class="col-span-4 grid grid-cols-3 gap-3">
                                                        <div class="grid grid-cols-5 gap-5 place-items-center">
                                                            <span class="col-span-1">Ciudad:</span>
                                                            {!! Form::text('ciudad', $datos_egresado->ciudad, ['class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                                        </div>
                                                        <div class="grid grid-cols-5 gap-5 place-items-center">
                                                            <span class="col-span-1">Municipio:</span>
                                                            {!! Form::text('municipio', $datos_egresado->municipio, ['class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                                        </div>
                                                        <div class="grid grid-cols-5 gap-5 place-items-center">
                                                            <span class="col-span-1">Estado:</span>
                                                            {!! Form::text('estado', $datos_egresado->estado, ['class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                                        </div>
                                                    </div>
                                                    <span class="col-span-2 flex place-items-center">
                                                        Telefono:
                                                        {!! Form::number('telefono', $datos_egresado->telefono, ['class' => 'w-full ml-5 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                                    </span>
                                                    <span class="col-span-2 flex place-items-center">
                                                        Correo electrónico:
                                                        {!! Form::text('email_empresa', Auth::user()->email, ['disabled', 'class' => 'disabled:opacity-75 w-full ml-5 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                                    </span>
                                                    
                                                    <div class="col-span-4">
                                                        <strong class="mr-10">2 Su empresa u organismo es:</strong>
                                                        <span class="col-span-1">Público{!! Form::radio('organismo', 'Público', $datos_egresado->organismo == 'Público' ? true : false , ['class' => 'mr-7 ml-3']) !!}</span>
                                                        <span class="col-span-1">Privado{!! Form::radio('organismo', 'Privado', $datos_egresado->organismo == 'Privado' ? true : false, ['class' => 'mr-7 ml-3']) !!}</span>
                                                        <span class="col-span-1">Social{!! Form::radio('organismo', 'Social', $datos_egresado->organismo == 'Social' ? true : false, ['class' => 'mr-7 ml-3']) !!}</span>
                                                    </div>
                                                    
                                                    <div class="col-span-4">
                                                        <strong class="mr-10">3 Tamaño de la empresa:</strong>
                                                        <span class="col-span-1">Microempresa (1-30){!! Form::radio('tamanio_empresa', 'Microempresa (1-30)', $datos_egresado->tamanio_empresa == 'Microempresa (1-30)' ? true : false , ['class' => 'mr-7 ml-3']) !!}</span>
                                                        <span class="col-span-1">Pequeña (31-100){!! Form::radio('tamanio_empresa', 'Pequeña (31-100)', $datos_egresado->tamanio_empresa == 'Pequeña (31-100)' ? true : false, ['class' => 'mr-7 ml-3']) !!}</span>
                                                        <span class="col-span-1">Mediana (101-500){!! Form::radio('tamanio_empresa', 'Mediana (101-500)', $datos_egresado->tamanio_empresa == 'Mediana (101-500)' ? true : false, ['class' => 'mr-7 ml-3']) !!}</span>
                                                        <span class="col-span-1">Grande (más de 500){!! Form::radio('tamanio_empresa', 'Grande (más de 500)', $datos_egresado->tamanio_empresa == 'Grande (más de 500)' ? true : false, ['class' => 'mr-7 ml-3']) !!}</span>
                                                    </div>
                                                    <div class="col-span-4">
                                                        <strong class="mr-10">4 Actividad económica de la empresa u organismo. Indique a cual clasificación corresponde su empresa:</strong>
                                                    </div>
                                                    <div class="col-span-4">
                                                        <div class="grid grid-cols-2 gap-2 divide-x">
                                                            <div class="grid grid-cols-1 divide-y -mr-2">
                                                                <span class="mb-3 mt-3">Agro-industrial{!! Form::radio('actividad_economica', 'Agro-industrial', true , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()']) !!}</span>
                                                                <span class="mb-3 mt-3">Silvicultura{!! Form::radio('actividad_economica', 'Silvicultura', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()']) !!}</span>
                                                                <span class="mb-3 mt-3">Pesca y acuacultura{!! Form::radio('actividad_economica', 'Pesca y acuacultura', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()']) !!}</span>
                                                                <span class="mb-3 mt-3">Minería{!! Form::radio('actividad_economica', 'Minería', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()']) !!}</span>
                                                                <span class="mb-3 mt-3">Alimentos, bebidas y tabaco{!! Form::radio('actividad_economica', 'Alimentos, bebidas y tabaco', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()']) !!}</span>
                                                                <span class="mb-3 mt-3">Textiles, vestido y cuero{!! Form::radio('actividad_economica', 'Textiles, vestido y cuero', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()']) !!}</span>
                                                                <span class="mb-3 mt-3">Madera y sus productos{!! Form::radio('actividad_economica', 'Madera y sus productos', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()']) !!}</span>
                                                                <span class="mb-3 mt-3">Papel, imprenta y editoriales{!! Form::radio('actividad_economica', 'Papel, imprenta y editoriales', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()']) !!}</span>
                                                                <span class="mb-3 mt-3">Química{!! Form::radio('actividad_economica', 'Química', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()']) !!}</span>
                                                                <span>Caucho y Plástico{!! Form::radio('actividad_economica', 'Caucho y Plástico', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()']) !!}</span>
                                                            </div>
                                                            <div class="grid grid-cols-1 divide-y">
                                                                <span class="mb-3 mt-3 pl-3">Minerales no metálicos{!! Form::radio('actividad_economica', 'Minerales no metálicos', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()']) !!}</span>
                                                                <span class="mb-3 mt-3 pl-3">Industrias metálicas básicas{!! Form::radio('actividad_economica', 'Industrias metálicas básicas', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()']) !!}</span>
                                                                <span class="mb-3 mt-3 pl-3">Productos metálicos, maquinaria y equipo{!! Form::radio('actividad_economica', 'Productos metálicos, maquinaria y equipo', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()']) !!}</span>
                                                                <span class="mb-3 mt-3 pl-3">Construcción{!! Form::radio('actividad_economica', 'Construcción', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()']) !!}</span>
                                                                <span class="mb-3 mt-3 pl-3">Electricidad, gas y agua{!! Form::radio('actividad_economica', 'Electricidad, gas y agua', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()']) !!}</span>
                                                                <span class="mb-3 mt-3 pl-3">Comercio y turismo{!! Form::radio('actividad_economica', 'Comercio y turismo', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()']) !!}</span>
                                                                <span class="mb-3 mt-3 pl-3">Transporte, almacenaje y comunicaciones{!! Form::radio('actividad_economica', 'Transporte, almacenaje y comunicaciones', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()']) !!}</span>
                                                                <span class="mb-3 mt-3 pl-3">Servicios financieros, seguros, actividades inmobiliarias y de alquiler{!! Form::radio('actividad_economica', 'Servicios financieros, seguros, actividades inmobiliarias y de alquiler', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()']) !!}</span>
                                                                <span class="mb-3 mt-3 pl-3">Educación{!! Form::radio('actividad_economica', 'Educación', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()']) !!}</span>
                                                                <span class="flex place-items-center pl-3">Otra{!! Form::radio('actividad_economica', 'Otra', false , ['class' => 'mr-7 ml-3', 'id' => 'OtraActividad', 'onclick' => 'otraTexto()']) !!}
                                                                    {!! Form::text('actividad_economicaotra', '', ['id' => 'ActividadTexto', 'placeholder' => 'Especifique', 'class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500 hidden']) !!}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {!! Form::submit('Siguiente', ['class' => 'bg-sky-500 hover:bg-sky-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white mt-5 ml-5']) !!}
                                            {!! Form::close() !!}
                                        </div>
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
