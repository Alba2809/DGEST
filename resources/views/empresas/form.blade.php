<style type="text/css">
    input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        margin: 0; 
    }
</style>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
<script type="text/javascript">
    
    function otraTexto() {
        if (document.getElementById('OtraActividad').checked) {
            document.getElementById('ActividadTexto').classList.remove("hidden");
        }
        else document.getElementById('ActividadTexto').classList.add("hidden");

    }

    function OtroMando(){
        
        if(document.getElementById('mando1').checked){
            document.getElementById('mandootra1').removeAttribute('disabled');
        }
        else document.getElementById('mandootra1').setAttribute("disabled", "");
        
        
        if(document.getElementById('mando2').checked){
            document.getElementById('mandootra2').removeAttribute('disabled');
        }
        else document.getElementById('mandootra2').setAttribute("disabled", "");
        
        
        if(document.getElementById('mando3').checked){
            document.getElementById('mandootra3').removeAttribute('disabled');
        }
        else document.getElementById('mandootra3').setAttribute("disabled", "");
        
        
        if(document.getElementById('mando4').checked){
            document.getElementById('mandootra4').removeAttribute('disabled');
        }
        else document.getElementById('mandootra4').setAttribute("disabled", "");
        
        
        if(document.getElementById('mando5').checked){
            document.getElementById('mandootra5').removeAttribute('disabled');
        }
        else document.getElementById('mandootra5').setAttribute("disabled", "");
        
        
        if(document.getElementById('mando6').checked){
            document.getElementById('mandootra6').removeAttribute('disabled');
        }
        else document.getElementById('mandootra6').setAttribute("disabled", "");
        
        
        if(document.getElementById('mando7').checked){
            document.getElementById('mandootra7').removeAttribute('disabled');
        }
        else document.getElementById('mandootra7').setAttribute("disabled", "");
        
        
        if(document.getElementById('mando8').checked){
            document.getElementById('mandootra8').removeAttribute('disabled');
        }
        else document.getElementById('mandootra8').setAttribute("disabled", "");
        
        
        if(document.getElementById('mando9').checked){
            document.getElementById('mandootra9').removeAttribute('disabled');
        }
        else document.getElementById('mandootra9').setAttribute("disabled", "");
        
        
        if(document.getElementById('mando10').checked){
            document.getElementById('mandootra10').removeAttribute('disabled');
        }
        else document.getElementById('mandootra10').setAttribute("disabled", "");
        
    }

</script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Formulario de Empresa') }}
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
                                                        <strong>1. Nombre Comercial de la Empresa:</strong> <x-input-error :messages="$errors->get('nombre')"/>
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
                                                        <strong class="mr-10">2. Su empresa u organismo es:</strong>
                                                        <span class="col-span-1"><label for="Público">Público</label>{!! Form::radio('organismo', 'Público', $datos_egresado->organismo == 'Público' ? true : false , ['class' => 'mr-7 ml-3', 'id' => 'Público']) !!}</span>
                                                        <span class="col-span-1"><label for="Privado">Privado</label>{!! Form::radio('organismo', 'Privado', $datos_egresado->organismo == 'Privado' ? true : false, ['class' => 'mr-7 ml-3', 'id' => 'Privado']) !!}</span>
                                                        <span class="col-span-1"><label for="Social">Social</label>{!! Form::radio('organismo', 'Social', $datos_egresado->organismo == 'Social' ? true : false, ['class' => 'mr-7 ml-3', 'id' => 'Social']) !!}</span>
                                                    </div>
                                                    
                                                    <div class="col-span-4">
                                                        <strong class="mr-10">3. Tamaño de la empresa:</strong>
                                                        <span class="col-span-1"><label for="Microempresa">Microempresa (1-30)</label>{!! Form::radio('tamanio_empresa', 'Microempresa (1-30)', $datos_egresado->tamanio_empresa == 'Microempresa (1-30)' ? true : false , ['class' => 'mr-7 ml-3', 'id' => 'Microempresa']) !!}</span>
                                                        <span class="col-span-1"><label for="Pequeña">Pequeña (31-100)</label>{!! Form::radio('tamanio_empresa', 'Pequeña (31-100)', $datos_egresado->tamanio_empresa == 'Pequeña (31-100)' ? true : false, ['class' => 'mr-7 ml-3', 'id' => 'Pequeña']) !!}</span>
                                                        <span class="col-span-1"><label for="Mediana">Mediana (101-500)</label>{!! Form::radio('tamanio_empresa', 'Mediana (101-500)', $datos_egresado->tamanio_empresa == 'Mediana (101-500)' ? true : false, ['class' => 'mr-7 ml-3', 'id' => 'Mediana']) !!}</span>
                                                        <span class="col-span-1"><label for="Grande">Grande (más de 500)</label>{!! Form::radio('tamanio_empresa', 'Grande (más de 500)', $datos_egresado->tamanio_empresa == 'Grande (más de 500)' ? true : false, ['class' => 'mr-7 ml-3', 'id' => 'Grande']) !!}</span>
                                                    </div>
                                                    <div class="col-span-4">
                                                        <strong class="mr-10">4. Actividad económica de la empresa u organismo. Indique a cual clasificación corresponde su empresa:</strong>
                                                    </div>
                                                    <div class="col-span-4">
                                                        <div class="grid grid-cols-2 gap-2 divide-x">
                                                            <div class="grid grid-cols-1 divide-y -mr-2">
                                                                <span class="mb-3 mt-3"><label for="Agro-industrial">Agro-industrial</label>{!! Form::radio('actividad_economica', 'Agro-industrial', true , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Agro-industrial']) !!}</span>
                                                                <span class="mb-3 mt-3"><label for="Silvicultura">Silvicultura</label>{!! Form::radio('actividad_economica', 'Silvicultura', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Silvicultura']) !!}</span>
                                                                <span class="mb-3 mt-3"><label for="Pesca y acuacultura">Pesca y acuacultura</label>{!! Form::radio('actividad_economica', 'Pesca y acuacultura', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Pesca y acuacultura']) !!}</span>
                                                                <span class="mb-3 mt-3"><label for="Minería">Minería</label>{!! Form::radio('actividad_economica', 'Minería', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Minería']) !!}</span>
                                                                <span class="mb-3 mt-3"><label for="Alimentos, bebidas y tabaco">Alimentos, bebidas y tabaco</label>{!! Form::radio('actividad_economica', 'Alimentos, bebidas y tabaco', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Alimentos, bebidas y tabaco']) !!}</span>
                                                                <span class="mb-3 mt-3"><label for="Textiles, vestido y cuero">Textiles, vestido y cuero</label>{!! Form::radio('actividad_economica', 'Textiles, vestido y cuero', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Textiles, vestido y cuero']) !!}</span>
                                                                <span class="mb-3 mt-3"><label for="Madera y sus productos">Madera y sus productos</label>{!! Form::radio('actividad_economica', 'Madera y sus productos', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Madera y sus productos']) !!}</span>
                                                                <span class="mb-3 mt-3"><label for="Papel, imprenta y editoriales">Papel, imprenta y editoriales</label>{!! Form::radio('actividad_economica', 'Papel, imprenta y editoriales', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Papel, imprenta y editoriales']) !!}</span>
                                                                <span class="mb-3 mt-3"><label for="Química">Química</label>{!! Form::radio('actividad_economica', 'Química', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Química']) !!}</span>
                                                                <span><label for="Caucho y Plástico">Caucho y Plástico</label>{!! Form::radio('actividad_economica', 'Caucho y Plástico', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Caucho y Plástico']) !!}</span>
                                                            </div>
                                                            <div class="grid grid-cols-1 divide-y">
                                                                <span class="mb-3 mt-3 pl-3"><label for="Minerales no metálicos">Minerales no metálicos</label>{!! Form::radio('actividad_economica', 'Minerales no metálicos', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Minerales no metálicos']) !!}</span>
                                                                <span class="mb-3 mt-3 pl-3"><label for="Industrias metálicas básicas">Industrias metálicas básicas</label>{!! Form::radio('actividad_economica', 'Industrias metálicas básicas', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Industrias metálicas básicas']) !!}</span>
                                                                <span class="mb-3 mt-3 pl-3"><label for="Productos metálicos, maquinaria y equipo">Productos metálicos, maquinaria y equipo</label>{!! Form::radio('actividad_economica', 'Productos metálicos, maquinaria y equipo', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Productos metálicos, maquinaria y equipo']) !!}</span>
                                                                <span class="mb-3 mt-3 pl-3"><label for="Construcción">Construcción</label>{!! Form::radio('actividad_economica', 'Construcción', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Construcción']) !!}</span>
                                                                <span class="mb-3 mt-3 pl-3"><label for="Electricidad, gas y agua">Electricidad, gas y agua</label>{!! Form::radio('actividad_economica', 'Electricidad, gas y agua', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Electricidad, gas y agua']) !!}</span>
                                                                <span class="mb-3 mt-3 pl-3"><label for="Comercio y turismo">Comercio y turismo</label>{!! Form::radio('actividad_economica', 'Comercio y turismo', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Comercio y turismo']) !!}</span>
                                                                <span class="mb-3 mt-3 pl-3"><label for="Transporte, almacenaje y comunicaciones">Transporte, almacenaje y comunicaciones</label>{!! Form::radio('actividad_economica', 'Transporte, almacenaje y comunicaciones', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Transporte, almacenaje y comunicaciones']) !!}</span>
                                                                <span class="mb-3 mt-3 pl-3"><label for="Servicios financieros, seguros">Servicios financieros, seguros, actividades inmobiliarias y de alquiler</label>{!! Form::radio('actividad_economica', 'Servicios financieros, seguros, actividades inmobiliarias y de alquiler', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Servicios financieros, seguros']) !!}</span>
                                                                <span class="mb-3 mt-3 pl-3"><label for="Educación">Educación</label>{!! Form::radio('actividad_economica', 'Educación', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Educación']) !!}</span>
                                                                <span class="flex place-items-center pl-3"><label for="OtraActividad">Otra</label>{!! Form::radio('actividad_economica', 'Otra', false , ['class' => 'mr-7 ml-3', 'id' => 'OtraActividad', 'onclick' => 'otraTexto()']) !!}
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
                                
                                @case('b')
                                    <div>
                                        <div>
                                            <h1 class="text-xl">B. UBICACIÓN LABORAL DE LOS EGRESADOS</h1>
                                            {!! Form::open(['route' => ['empresa.form.modulob'], 'method' => 'post']) !!}
                                                <div class="grid grid-cols-4 gap-4">
                                                    <strong class="col-span-4">5. Número de profesionistas con nivel de licenciatura que laboran en la empresa u organismo:</strong>
                                                    <div class="col-span-4">
                                                        <div class="grid grid-cols-5 gap-5">
                                                            <span class="col-span-1"><label for="Profesionista1">1</label>{!! Form::radio('no_profesionistas', '1', true, ['class' => 'mr-7 ml-3', 'id' => 'Profesionista1']) !!}</span>
                                                            <span class="col-span-1"><label for="Profesionista25">De 2 a 5</label>{!! Form::radio('no_profesionistas', 'De 2 a 5', false, ['class' => 'mr-7 ml-3', 'id' => 'Profesionista25']) !!}</span>
                                                            <span class="col-span-1"><label for="Profesionista68">De 6 a 8</label>{!! Form::radio('no_profesionistas', 'De 6 a 8', false, ['class' => 'mr-7 ml-3', 'id' => 'Profesionista68']) !!}</span>
                                                            <span class="col-span-1"><label for="Profesionista910">De 9 a 10</label>{!! Form::radio('no_profesionistas', 'De 9 a 10', false, ['class' => 'mr-7 ml-3', 'id' => 'Profesionista910']) !!}</span>
                                                            <span class="col-span-1"><label for="ProfesionistaMas10">Más de 10</label>{!! Form::radio('no_profesionistas', 'Más de 10', false, ['class' => 'mr-7 ml-3', 'id' => 'ProfesionistaMas10']) !!}</span>
                                                        </div>
                                                    </div>
                                                    
                                                    <strong class="col-span-4">6. Número de egresados del Instituto Tecnológico y nivel jerárquico que ocupan en su organización:</strong>
                                                    <div class="col-span-4">
                                                        <table>
                                                            <thead>
                                                                <tr><th>Carrera</th><th>Cantidad</th><th>Mando</th></tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>{!! Form::text('carreras1', 'Industrial', ['disabled', 'class' => 'col-span-2 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="w-24">{!! Form::number('cantidad1', '', ['placeholder' => 'Cantidad', 'class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="grid grid-cols-5 gap-5">
                                                                        <span class="mb-3 mt-3 pl-3"><label for="IndustrialSuperior">Mando superior</label>{!! Form::radio('mando1', 'Mando superior', true , ['class' => 'mr-7 ml-3', 'id' => 'IndustrialSuperior', 'onclick' => 'OtroMando()']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="IndustrialInterm">Mando intermedio</label>{!! Form::radio('mando1', 'Mando intermedio', false , ['class' => 'mr-7 ml-3', 'id' => 'IndustrialInterm', 'onclick' => 'OtroMando()']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="IdustrialSup">Supervisor o equivalente</label>{!! Form::radio('mando1', 'Supervisor o equivalente', false , ['class' => 'mr-7 ml-3', 'id' => 'IdustrialSup', 'onclick' => 'OtroMando()']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="IndustrialAxu">Técnico o auxiliar</label>{!! Form::radio('mando1', 'Técnico o auxiliar', false , ['class' => 'mr-7 ml-3', 'id' => 'IndustrialAxu', 'onclick' => 'OtroMando()']) !!}</span>
                                                                        <div><label for="mando1">Otro</label>{!! Form::radio('mando1', 'Otra', false , ['class' => 'mr-7 ml-3', 'id' => 'mando1', 'onclick' => 'OtroMando()']) !!}
                                                                            {!! Form::text('mandootra1', '', ['disabled', 'id' => 'mandootra1', 'placeholder' => 'Especifique', 'class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500 disabled:opacity-75']) !!}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{!! Form::text('carreras2', 'Gestión Empresarial', ['disabled', 'class' => 'col-span-2 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-2 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="w-24">{!! Form::number('cantidad2', '', ['placeholder' => 'Cantidad', 'class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="grid grid-cols-5 gap-5">
                                                                        <span class="mb-3 mt-3 pl-3"><label for="GesSup">Mando superior</label>{!! Form::radio('mando2', 'Mando superior', true , ['class' => 'mr-7 ml-3', 'id' => 'GesSup', 'onclick' => 'OtroMando()']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="GesInt">Mando intermedio</label>{!! Form::radio('mando2', 'Mando intermedio', false , ['class' => 'mr-7 ml-3', 'id' => 'GesInt', 'onclick' => 'OtroMando()']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="GesEqu">Supervisor o equivalente</label>{!! Form::radio('mando2', 'Supervisor o equivalente', false , ['class' => 'mr-7 ml-3', 'id' => 'GesEqu', 'onclick' => 'OtroMando()']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="GesAux">Técnico o auxiliar</label>{!! Form::radio('mando2', 'Técnico o auxiliar', false , ['class' => 'mr-7 ml-3', 'id' => 'GesAux', 'onclick' => 'OtroMando()']) !!}</span>
                                                                        <div><label for="mando2">Otro</label>{!! Form::radio('mando2', 'Otra', false , ['class' => 'mr-7 ml-3', 'id' => 'mando2', 'onclick' => 'OtroMando()']) !!}
                                                                            {!! Form::text('mandootra2', '', ['disabled', 'id' => 'mandootra2', 'placeholder' => 'Especifique', 'class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500 disabled:opacity-75']) !!}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{!! Form::text('carreras3', 'Sistemas Computacionales', ['disabled', 'class' => 'col-span-2 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="w-24">{!! Form::number('cantidad3', '', ['placeholder' => 'Cantidad', 'class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="grid grid-cols-5 gap-5">
                                                                        <span class="mb-3 mt-3 pl-3"><label for="SisSup">Mando superior</label>{!! Form::radio('mando3', 'Mando superior', true , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'SisSup']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="SisInt">Mando intermedio</label>{!! Form::radio('mando3', 'Mando intermedio', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'SisInt']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="SisEqu">Supervisor o equivalente</label>{!! Form::radio('mando3', 'Supervisor o equivalente', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'SisEqu']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="SisAux">Técnico o auxiliar</label>{!! Form::radio('mando3', 'Técnico o auxiliar', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'SisAux']) !!}</span>
                                                                        <div><label for="mando3">Otro</label>{!! Form::radio('mando3', 'Otra', false , ['class' => 'mr-7 ml-3', 'id' => 'mando3', 'onclick' => 'OtroMando()']) !!}
                                                                            {!! Form::text('mandootra3', '', ['disabled', 'id' => 'mandootra3', 'placeholder' => 'Especifique', 'class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500 disabled:opacity-75']) !!}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{!! Form::text('carreras4', 'Electrónica', ['disabled', 'class' => 'col-span-2 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="w-24">{!! Form::number('cantidad4', '', ['placeholder' => 'Cantidad', 'class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="grid grid-cols-5 gap-5">
                                                                        <span class="mb-3 mt-3 pl-3"><label for="ElecSup">Mando superior</label>{!! Form::radio('mando4', 'Mando superior', true , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'ElecSup']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="ElecInt">Mando intermedio</label>{!! Form::radio('mando4', 'Mando intermedio', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'ElecInt']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="ElecEqu">Supervisor o equivalente</label>{!! Form::radio('mando4', 'Supervisor o equivalente', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'ElecEqu']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="ElecAux">Técnico o auxiliar</label>{!! Form::radio('mando4', 'Técnico o auxiliar', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'ElecAux']) !!}</span>
                                                                        <div><label for="mando4">Otro</label>{!! Form::radio('mando4', 'Otra', false , ['class' => 'mr-7 ml-3', 'id' => 'mando4', 'onclick' => 'OtroMando()']) !!}
                                                                            {!! Form::text('mandootra4', '', ['disabled', 'id' => 'mandootra4', 'placeholder' => 'Especifique', 'class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500 disabled:opacity-75']) !!}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{!! Form::text('carreras5', 'Gastronomía', ['disabled', 'class' => 'col-span-2 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="w-24">{!! Form::number('cantidad5', '', ['placeholder' => 'Cantidad', 'class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="grid grid-cols-5 gap-5">
                                                                        <span class="mb-3 mt-3 pl-3"><label for="GasSup">Mando superior</label>{!! Form::radio('mando5', 'Mando superior', true , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'GasSup']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="GasInt">Mando intermedio</label>{!! Form::radio('mando5', 'Mando intermedio', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'GasInt']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="GasEqu">Supervisor o equivalente</label>{!! Form::radio('mando5', 'Supervisor o equivalente', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'GasEqu']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="GasAux">Técnico o auxiliar</label>{!! Form::radio('mando5', 'Técnico o auxiliar', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'GasAux']) !!}</span>
                                                                        <div><label for="mando5">Otro</label>{!! Form::radio('mando5', 'Otra', false , ['class' => 'mr-7 ml-3', 'id' => 'mando5', 'onclick' => 'OtroMando()']) !!}
                                                                            {!! Form::text('mandootra5', '', ['disabled', 'id' => 'mandootra5', 'placeholder' => 'Especifique', 'class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500 disabled:opacity-75']) !!}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{!! Form::text('carreras6', 'Electromecánica', ['disabled', 'class' => 'col-span-2 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="w-24">{!! Form::number('cantidad6', '', ['placeholder' => 'Cantidad', 'class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="grid grid-cols-5 gap-5">
                                                                        <span class="mb-3 mt-3 pl-3"><label for="ElectroSup">Mando superior</label>{!! Form::radio('mando6', 'Mando superior', true , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'ElectroSup']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="ElectroInt">Mando intermedio</label>{!! Form::radio('mando6', 'Mando intermedio', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'ElectroInt']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="ElectroEqu">Supervisor o equivalente</label>{!! Form::radio('mando6', 'Supervisor o equivalente', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'ElectroEqu']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="ElectroAux">Técnico o auxiliar</label>{!! Form::radio('mando6', 'Técnico o auxiliar', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'ElectroAux']) !!}</span>
                                                                        <div><label for="mando6">Otro</label>{!! Form::radio('mando6', 'Otra', false , ['class' => 'mr-7 ml-3', 'id' => 'mando6', 'onclick' => 'OtroMando()']) !!}
                                                                            {!! Form::text('mandootra6', '', ['disabled', 'id' => 'mandootra6', 'placeholder' => 'Especifique', 'class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500 disabled:opacity-75']) !!}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{!! Form::text('carreras7', 'Industrias Alimentarias', ['disabled', 'class' => 'col-span-2 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="w-24">{!! Form::number('cantidad7', '', ['placeholder' => 'Cantidad', 'class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="grid grid-cols-5 gap-5">
                                                                        <span class="mb-3 mt-3 pl-3"><label for="AlimSup">Mando superior</label>{!! Form::radio('mando7', 'Mando superior', true , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'AlimSup']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="AlimInt">Mando intermedio</label>{!! Form::radio('mando7', 'Mando intermedio', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'AlimInt']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="AlimEqu">Supervisor o equivalente</label>{!! Form::radio('mando7', 'Supervisor o equivalente', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'AlimEqu']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="AlimAux">Técnico o auxiliar</label>{!! Form::radio('mando7', 'Técnico o auxiliar', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'AlimAux']) !!}</span>
                                                                        <div><label for="mando7">Otro</label>{!! Form::radio('mando7', 'Otra', false , ['class' => 'mr-7 ml-3', 'id' => 'mando7', 'onclick' => 'OtroMando()']) !!}
                                                                            {!! Form::text('mandootra7', '', ['disabled', 'id' => 'mandootra7', 'placeholder' => 'Especifique', 'class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500 disabled:opacity-75']) !!}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{!! Form::text('carreras8', 'Bioquímica', ['disabled', 'class' => 'col-span-2 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="w-24">{!! Form::number('cantidad8', '', ['placeholder' => 'Cantidad', 'class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="grid grid-cols-5 gap-5">
                                                                        <span class="mb-3 mt-3 pl-3"><label for="BioSup">Mando superior</label>{!! Form::radio('mando8', 'Mando superior', true , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'BioSup']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="BioInt">Mando intermedio</label>{!! Form::radio('mando8', 'Mando intermedio', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'BioInt']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="BioEqu">Supervisor o equivalente</label>{!! Form::radio('mando8', 'Supervisor o equivalente', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'BioEqu']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="BioAux">Técnico o auxiliar</label>{!! Form::radio('mando8', 'Técnico o auxiliar', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'BioAux']) !!}</span>
                                                                        <div><label for="mando8">Otro</label>{!! Form::radio('mando8', 'Otra', false , ['class' => 'mr-7 ml-3', 'id' => 'mando8', 'onclick' => 'OtroMando()']) !!}
                                                                            {!! Form::text('mandootra8', '', ['disabled', 'id' => 'mandootra8', 'placeholder' => 'Especifique', 'class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500 disabled:opacity-75']) !!}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{!! Form::text('carreras9', 'Mecatrónica', ['disabled', 'class' => 'col-span-2 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="w-24">{!! Form::number('cantidad9', '', ['placeholder' => 'Cantidad', 'class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="grid grid-cols-5 gap-5">
                                                                        <span class="mb-3 mt-3 pl-3"><label for="MecaSup">Mando superior</label>{!! Form::radio('mando9', 'Mando superior', true , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'MecaSup']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="MecaInt">Mando intermedio</label>{!! Form::radio('mando9', 'Mando intermedio', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'MecaInt']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="MecaEqu">Supervisor o equivalente</label>{!! Form::radio('mando9', 'Supervisor o equivalente', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'MecaEqu']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="MecaAux">Técnico o auxiliar</label>{!! Form::radio('mando9', 'Técnico o auxiliar', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'MecaAux']) !!}</span>
                                                                        <div><label for="mando9">Otro</label>{!! Form::radio('mando9', 'Otra', false , ['class' => 'mr-7 ml-3', 'id' => 'mando9', 'onclick' => 'OtroMando()']) !!}
                                                                            {!! Form::text('mandootra9', '', ['disabled', 'id' => 'mandootra9', 'placeholder' => 'Especifique', 'class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500 disabled:opacity-75']) !!}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{!! Form::text('carreras10', 'Civil', ['disabled', 'class' => 'col-span-2 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="w-24">{!! Form::number('cantidad10', '', ['placeholder' => 'Cantidad', 'class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="grid grid-cols-5 gap-5">
                                                                        <span class="mb-3 mt-3 pl-3"><label for="CivSup">Mando superior</label>{!! Form::radio('mando10', 'Mando superior', true , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'CivSup']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="CivInt">Mando intermedio</label>{!! Form::radio('mando10', 'Mando intermedio', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'CivInt']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="CivEqu">Supervisor o equivalente</label>{!! Form::radio('mando10', 'Supervisor o equivalente', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'CivEqu']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="CivAux">Técnico o auxiliar</label>{!! Form::radio('mando10', 'Técnico o auxiliar', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'CivAux']) !!}</span>
                                                                        <div><label for="mando10">Otro</label>{!! Form::radio('mando10', 'Otra', false , ['class' => 'mr-7 ml-3', 'id' => 'mando10', 'onclick' => 'OtroMando()']) !!}
                                                                            {!! Form::text('mandootra10', '', ['disabled', 'id' => 'mandootra10', 'placeholder' => 'Especifique', 'class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500 disabled:opacity-75']) !!}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    
                                                    <strong class="col-span-4">7. Congruencia entre perfil profesional y función que desarrollan los egresados del Instituto Tecnológico en su empresa u organización. Del total de egresados seleccione el porcentaje que corresponda:</strong>
                                                    <div class="col-span-4">
                                                        <div class="grid grid-cols-4 gap-4">
                                                            <span class="col-span-1"><label for="Completamente">Completamente</label>{!! Form::radio('funcion_prefil', 'Completamente', true, ['class' => 'mr-7 ml-3', 'id' => 'Completamente']) !!}</span>
                                                            <span class="col-span-1"><label for="Medianamente">Medianamente</label>{!! Form::radio('funcion_prefil', 'Medianamente', false, ['class' => 'mr-7 ml-3', 'id' => 'Medianamente']) !!}</span>
                                                            <span class="col-span-1"><label for="Ligeramente">Ligeramente</label>{!! Form::radio('funcion_prefil', 'Ligeramente', false, ['class' => 'mr-7 ml-3', 'id' => 'Ligeramente']) !!}</span>
                                                            <span class="col-span-1"><label for="Ninguna relación">Ninguna relación</label>{!! Form::radio('funcion_prefil', 'Ninguna relación', false, ['class' => 'mr-7 ml-3', 'id' => 'Ninguna relación']) !!}</span>
                                                        </div>
                                                    </div>

                                                    <strong class="col-span-4">8. Requisitos que establece su empresa u organización para la contratación de personal con nivel de licenciatura:</strong>
                                                    <div class="col-span-4 grid grid-cols-2 gap-2">
                                                        <span><label for="Área o campo de estudio">Área o campo de estudio</label>
                                                            {!! Form::checkbox('requisitos[]', 'Área o campo de estudio', false, ['id' => 'Área o campo de estudio']) !!}
                                                        </span>
                                                        <span><label for="Titulación">Titulación</label>
                                                            {!! Form::checkbox('requisitos[]', 'Titulación', false, ['id' => 'Titulación']) !!}
                                                        </span>
                                                        <span><label for="Experiencia laboral">Experiencia laboral/práctica</label>
                                                            {!! Form::checkbox('requisitos[]', 'Experiencia laboral/práctica', false, ['id' => 'Experiencia laboral']) !!}
                                                        </span>
                                                        <span><label for="Posicionamiento">Posicionamiento de la Institución de Egreso</label>
                                                            {!! Form::checkbox('requisitos[]', 'Posicionamiento de la Institución de Egreso', false, ['id' => 'Posicionamiento']) !!}
                                                        </span>
                                                        <span><label for="Conocimiento de idiomas">Conocimiento de idiomas extranjeros</label>
                                                            {!! Form::checkbox('requisitos[]', 'Conocimiento de idiomas extranjeros', false, ['id' => 'Conocimiento de idiomas']) !!}
                                                        </span>
                                                        <span><label for="Recomendaciones">Recomendaciones/Referencias</label>
                                                            {!! Form::checkbox('requisitos[]', 'Recomendaciones/Referencias', false, ['id' => 'Recomendaciones']) !!}
                                                        </span>
                                                        <span><label for="Personalidad">Personalidad/actitudes</label>
                                                            {!! Form::checkbox('requisitos[]', 'Personalidad/actitudes', false, ['id' => 'Personalidad']) !!}
                                                        </span>
                                                        <span><label for="Capacidad de liderazgo">Capacidad de liderazgo</label>
                                                            {!! Form::checkbox('requisitos[]', 'Capacidad de liderazgo', false, ['id' => 'Capacidad de liderazgo']) !!}
                                                        </span>
                                                        <span class="col-span-2 flex items-center">
                                                            Otro: 
                                                            {!! Form::text('requisitostexto', '', ['placeholder' => 'Especifique', 'id'=> 'RequisitoTexto', 'class' => 'w-[45%] ml-5 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                                        </span>
                                                    </div>

                                                    <strong class="col-span-4">9. Carreras que demanda preferentemente su empresa u organismo:</strong>
                                                    <div class="col-span-4 grid grid-cols-2 gap-2">
                                                        <span>
                                                            <label for="Ingeniería Industrial">Ingeniería Industrial</label>
                                                            {!! Form::checkbox('carreras[]', 'Ingeniería Industrial', false, ['id' => 'Ingeniería Industrial']) !!}
                                                        </span>
                                                        <span>
                                                            <label for="Ingeniería en Gestión Empresarial">Ingeniería en Gestión Empresarial</label>
                                                            {!! Form::checkbox('carreras[]', 'Ingeniería en Gestión Empresarial', false, ['id' => 'Ingeniería en Gestión Empresarial']) !!}
                                                        </span>
                                                        <span>
                                                            <label for="Ingeniería en Sistemas Computacionales">Ingeniería en Sistemas Computacionales</label>
                                                            {!! Form::checkbox('carreras[]', 'Ingeniería en Sistemas Computacionales', false, ['id' => 'Ingeniería en Sistemas Computacionales']) !!}
                                                        </span>
                                                        <span>
                                                            <label for="Ingeniería en Electrónica">Ingeniería en Electrónica</label>
                                                            {!! Form::checkbox('carreras[]', 'Ingeniería en Electrónica', false, ['id' => 'Ingeniería en Electrónica']) !!}
                                                        </span>
                                                        <span>
                                                            <label for="Ingeniería Electromecánica">Ingeniería Electromecánica</label>
                                                            {!! Form::checkbox('carreras[]', 'Ingeniería Electromecánica', false, ['id' => 'Ingeniería Electromecánica']) !!}
                                                        </span>
                                                        <span>
                                                            <label for="Ingeniería en Industrias Alimentarias">Ingeniería en Industrias Alimentarias</label>
                                                            {!! Form::checkbox('carreras[]', 'Ingeniería en Industrias Alimentarias', false, ['id' => 'Ingeniería en Industrias Alimentarias']) !!}
                                                        </span>
                                                        <span>
                                                            <label for="Ingeniería Bioquímica">Ingeniería Bioquímica</label>
                                                            {!! Form::checkbox('carreras[]', 'Ingeniería Bioquímica', false, ['id' => 'Ingeniería Bioquímica']) !!}
                                                        </span>
                                                        <span>
                                                            <label for="Ingeniería Mecatrónica">Ingeniería Mecatrónica</label>
                                                            {!! Form::checkbox('carreras[]', 'Ingeniería Mecatrónica', false, ['id' => 'Ingeniería Mecatrónica']) !!}
                                                        </span>
                                                        <span>
                                                            <label for="Ingeniería Civil">Ingeniería Civil</label>
                                                            {!! Form::checkbox('carreras[]', 'Ingeniería Civil', false, ['id' => 'Ingeniería Civil']) !!}
                                                        </span>
                                                        <span>
                                                            <label for="Licenciatura en Gastronomía">Licenciatura en Gastronomía</label>
                                                            {!! Form::checkbox('carreras[]', 'Licenciatura en Gastronomía', false, ['id' => 'Licenciatura en Gastronomía']) !!}
                                                        </span>
                                                    </div>
                                                </div>
                                                {!! Form::submit('Siguiente', ['class' => 'bg-sky-500 hover:bg-sky-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white mt-5 ml-5']) !!}
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                @break
                                
                                @case('c')
                                    <div>
                                        <div>
                                            <h1 class="text-xl">C. COMPETENCIAS LABORALES</h1>
                                            {!! Form::open(['route' => ['empresa.form.moduloc'], 'method' => 'post']) !!}
                                                <div class="grid grid-cols-5 gap-5">
                                                    <strong class="col-span-5">10. En su opinión ¿qué competencias considera deben desarrollar los egresados del Instituto Tecnológico, para desempeñarse eficientemente en sus actividades laborales?</strong>
                                                    <strong class="col-span-5">Por favor evalúe conforme a la tabla siguiente: <span class="text-sm font-normal">Califique del 1 (menor) al 5 (mayor):</span> </strong>
                                                </div>
                                                
                                                <div class="overflow-auto h-[75%] relative shadow-md sm:rounded-lg mt-5 mb-5">
                                                    <table class="w-full text-sm text-justify text-gray-500 dark:text-gray-400">
                                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                            <tr>
                                                                <th scope="col" class="py-3 px-6">
                                                                    Competencia Laboral
                                                                </th>
                                                                <th scope="col" class="py-3 px-6">
                                                                    1
                                                                </th>
                                                                <th scope="col" class="py-3 px-6">
                                                                    2
                                                                </th>
                                                                <th scope="col" class="py-3 px-6">
                                                                    3
                                                                </th>
                                                                <th scope="col" class="py-3 px-6">
                                                                    4
                                                                </th>
                                                                <th scope="col" class="py-3 px-6">
                                                                    5
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 text-left whitespace-nowrap dark:text-white">
                                                                    Habilidad para resolver conflictos
                                                                </th>
                                                                <td class="py-4 px-6 items-start">
                                                                    {!! Form::radio('resolver_conflictos', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('resolver_conflictos', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('resolver_conflictos', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('resolver_conflictos', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('resolver_conflictos', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Ortografía y redacción de documentos
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('ortografia', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('ortografia', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('ortografia', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('ortografia', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('ortografia', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Mejora de procesos
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('mejora_procesos', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('mejora_procesos', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('mejora_procesos', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('mejora_procesos', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('mejora_procesos', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Trabajo en equipo
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('trabajo_equipo', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('trabajo_equipo', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('trabajo_equipo', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('trabajo_equipo', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('trabajo_equipo', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Habilidad para administrar tiempo
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('administrar_tiempo', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('administrar_tiempo', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('administrar_tiempo', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('administrar_tiempo', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('administrar_tiempo', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Seguridad personal
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('seguridad_personal', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('seguridad_personal', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('seguridad_personal', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('seguridad_personal', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('seguridad_personal', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Facilidad de palabra
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('facilidad_palabra', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('facilidad_palabra', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('facilidad_palabra', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('facilidad_palabra', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('facilidad_palabra', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Gestión de Proyectos
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('gestion_proyectos', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('gestion_proyectos', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('gestion_proyectos', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('gestion_proyectos', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('gestion_proyectos', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Puntualidad y Asistencia
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('puntualidad', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('puntualidad', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('puntualidad', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('puntualidad', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('puntualidad', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Cumplimiento de las normas
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('cumplimiento_normas', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('cumplimiento_normas', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('cumplimiento_normas', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('cumplimiento_normas', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('cumplimiento_normas', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Integración al trabajo
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('integracion_trabajo', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('integracion_trabajo', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('integracion_trabajo', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('integracion_trabajo', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('integracion_trabajo', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Creatividad e innovación
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('innovacion', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('innovacion', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('innovacion', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('innovacion', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('innovacion', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Capacidad de negociación
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('negociacion', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('negociacion', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('negociacion', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('negociacion', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('negociacion', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Capacidad de abstracción, análisis y síntesis
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('analisis', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('analisis', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('analisis', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('analisis', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('analisis', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Liderazgo y toma de decisiones
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('liderazgo', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('liderazgo', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('liderazgo', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('liderazgo', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('liderazgo', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Adaptación al cambio
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('adaptacion', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('adaptacion', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('adaptacion', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('adaptacion', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('adaptacion', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    <div class="flex items-center">
                                                                        Otra: {!! Form::text('otra_competencia', '', ['placeholder' => 'Especifique', 'class' => 'dark:text-black text-white ml-2 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                                                    </div>
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('otras', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('otras', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('otras', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('otras', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('otras', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                
                                                <div class="grid grid-cols-4 gap-4">
                                                    <strong class="col-span-4">11. Con base al desempeño laboral así como a las actividades laborales que realiza el egresado ¿Cómo considera su desempeño laboral respecto a su formación académica? Del total de egresados seleccione el porcentaje que corresponda.</strong>
                                                    <span><label for="CompletamenteC">Completamente</label>{!! Form::radio('desempeño_laboral', 'Completamente', true, ['class' => 'mr-7 ml-3', 'id' => 'CompletamenteC']) !!}</span>
                                                    <span><label for="MedianamenteC">Medianamente</label>{!! Form::radio('desempeño_laboral', 'Medianamente', false, ['class' => 'mr-7 ml-3', 'id' => 'MedianamenteC']) !!}</span>
                                                    <span><label for="LigeramenteC">Ligeramente</label>{!! Form::radio('desempeño_laboral', 'Ligeramente', false, ['class' => 'mr-7 ml-3', 'id' => 'LigeramenteC']) !!}</span>
                                                    <span><label for="Ninguna relaciónC">Ninguna relación</label>{!! Form::radio('desempeño_laboral', 'Ninguna relación', false, ['class' => 'mr-7 ml-3', 'id' => 'Ninguna relaciónC']) !!}</span>
                                                </div>

                                                <div class="mt-5">
                                                    <strong>12.  De acuerdo con las necesidades de su empresa u organismo, ¿qué sugiere para mejorar la formación de los egresados del Instituto Tecnológico?</strong>
                                                    {!! Form::textarea('sugerencias_instituto', '', ['placeholder' => 'Escriba sus sugerencias aquí...', 'class' => 'block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 resize-none']) !!}
                                                </div>
                                                
                                                <div class="mt-5">
                                                    <strong>13.  Comentarios y sugerencias:</strong>
                                                    {!! Form::textarea('comentarios_sugerencias', '', ['placeholder' => 'Escriba sus comentarios y sugerencias aquí...', 'class' => 'block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 resize-none']) !!}
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
